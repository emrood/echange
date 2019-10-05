<?php

namespace App\Http\Controllers;

use App\CashFund;
use App\Change;
use App\Currency;
use App\Http\Resources\CurrencyResources;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


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

            $from_date = Carbon::today()->toDateString();
            $to_date = Carbon::today()->toDateString();
            $users = User::all();
            $currencies = Currency::where('is_reference', false)->get();
            $user_id = '*';
            $currency_id = '*';

            if(!empty($request->all())){

            }


            $changes = Change::whereDate('created_at', [$from_date, $to_date]);
            if($user_id != '*'){
                $$changes = $changes->where('user_id', $user_id);
            }

            $changes = $changes->get();

//            dd($changes);

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
}
