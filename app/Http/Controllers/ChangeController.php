<?php

namespace App\Http\Controllers;

use App\CashFund;
use App\Change;
use App\Currency;
use App\Http\Resources\CurrencyResources;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Cache\Events\CacheHit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Barryvdh\Snappy\Facades\SnappyPdf;



class ChangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Auth::check()) {

            ini_set('memory_limit', '3096M');
            $array_currency = array();
            $currencies = Currency::all();
            $cashFund = CashFund::whereDate('date', Carbon::today()->toDateString())->where('cashier_id', Auth::user()->id)->where('is_canceled', false)->first();
            if ($cashFund) {
                foreach ($cashFund->funds->where('currency_id', '>', 1) as $fund) {
                    $array_currency[$fund->currency->id] = $fund->currency->abbreviation . ' -----> ' . Currency::where('is_reference', true)->first()->abbreviation;
                }
            }

            return view('change.index', compact('cashFund', 'array_currency', 'currencies'));
        }

        abort(401);
    }

    public function list(Request $request){

        if(Auth::check() && (Auth::user()->isAdmin() || Auth::user()->isSupervisor())){

            ini_set('memory_limit', '3096M');

            $query_from_date = Carbon::today()->toDateString();
            $query_to_date = Carbon::today()->toDateString();
            $from_date = Carbon::today()->format('m/d/Y');
            $to_date = Carbon::today()->format('m/d/Y');
            $users = User::all();
            $currencies = Currency::all();
            $user_id = '*';
            $currency_id = '*';

            if(!empty($request->all())){
//                dd($request->all());
                $user_id = $request->user_id;
                $currency_id = $request->currency_id;
                $from_date = $request->start;
                $to_date= $request->end;

                $query_from_date = Carbon::createFromFormat('m/d/Y', $from_date)->toDateString();
                $query_to_date = Carbon::createFromFormat('m/d/Y', $to_date)->toDateString();


            }

//            $changes = Change::whereBetween('created_at', [$query_from_date, $query_to_date]);


            $changes = Change::whereDate('created_at', '>=' ,$query_from_date)->whereDate('created_at', '<=' ,$query_to_date);

//            dd($changes);

            if($user_id != '*'){
                $changes = $changes->where('user_id', (int) $user_id);
            }

            if($currency_id != '*'){
                $changes = $changes->where('from_currency_id', (int) $currency_id);
            }

            $changes = $changes->get();
//            dd($query_to_date);

            return view('change.list', compact('changes', 'user_id', 'currency_id', 'from_date', 'to_date', 'users', 'currencies'));
        }

        abort(401);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function getratesale()
    {
        return new CurrencyResources(Currency::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        if (Auth::check()) {
            ini_set('memory_limit', '3096M');


            $cashFund = Auth::user()->funds()->whereDate('date', Carbon::today()->toDateString())->where('is_canceled', false)->first();
            if($cashFund != null){
                $currency = Currency::find($request->change_type);
                if($currency){
                    $change = new Change();
                    $change->from_currency_id = $request->change_type;
                    $change->to_currency_id = 1;
                    $change->rate_used = $currency->sale_rate;
                    $change->amount_received = $request->change_amount;
                    $change->given_amount = $request->change_amount * $currency->sale_rate;
                    $change->user_id = Auth::user()->id;
                    $change->uid = md5(uniqid(Auth::user()->id, true));

                    if($change->save()){

                        $cashFund->is_locked = true;
                        $cashFund->save();
                        //Mise a jour de la caisse
                        $withdrawal = $cashFund->funds()->where('currency_id', 1)->first();
                        if($withdrawal){
                            $withdrawal->amount -= $change->given_amount;
                            $withdrawal->save();
                        }


                        $deposit = $cashFund->funds()->where('currency_id', $request->change_type)->first();
                        if($deposit){
                            $deposit->amount += $change->amount_received;
                            $deposit->save();
                        }

                        if($request->has('print')){
                          //TODO PRINT TICKET
                        }
//                        Session::flash('message','Transaction enregistrée avec succès!');
                        return redirect()->back()->with('message','Transaction enregistrée avec succès !');;
                    }else{
                        abort(500);
                    }
                }else{
                    abort(401);
                }
            }
            abort(401);
        }
        abort(401);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Change $change
     * @return \Illuminate\Http\Response
     */
    public function show(Change $change)
    {
        //
        return view('change.show', compact('change'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Change $change
     * @return \Illuminate\Http\Response
     */
    public function edit(Change $change)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Change $change
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Change $change)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Change $change
     * @return \Illuminate\Http\Response
     */
    public function destroy(Change $change)
    {
        //
    }

    public function cancel($id){
        if(Auth::check() && (Auth::user()->isAdmin() || Auth::user()->isSupervisor())){
            $change = Change::find($id);
            if($change){
                $change->canceled = true;
                if($change->save()){
                    $cashFund = CashFund::where('cashier_id', $change->user_id)->where('is_locked', true)->where('is_canceled', false)->whereDate('date', Carbon::today()->toDateString())->first();

//                    dd($cashFund);
                    if($cashFund){
                        $deposit = $cashFund->funds()->where('currency_id', $change->to_currency_id)->first();
                        if($deposit){
                            $deposit->amount += $change->given_amount;
                            $deposit->save();
                        }

                        $redrawal = $cashFund->funds()->where('currency_id', $change->from_currency_id)->first();
                        if($redrawal){
                            $redrawal->amount -= $change->amount_received;
                            $redrawal->save();
//                            dd($cashFund->amount_received);
                        }
//                        dd($redrawal);
                    }
                }

                return redirect()->back()->with('message','Transaction annulée avec succès !');
            }else{
                return redirect()->back()->with('message','Transaction non trouvée !');
            }
        }

        abort(401);
    }


    public function print($id){

        $change = Change::find($id);

        if($change){

            $pdf = PDF::loadView('change.print', compact('change'));
            return $pdf->download('operation de change - '.$change->created_at.'.pdf');

//            $pdf = SnappyPdf::loadView('change.print', compact('change'));
//            return $pdf->download('operation de change_'.$change->created_at.'.pdf');
////            return view('change.print', compact('change'));
        }

        abort(404);
    }
}
