<?php

namespace App\Http\Controllers;

use App\CashFund;
use App\CashFundCurrency;
use App\Currency;
use App\Deposit;
use App\DepositCurrency;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade as PDF;


class CashFundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        if(Auth::check() && (Auth::user()->isAdmin() || Auth::user()->isSupervisor())){
            $cashFunds = CashFund::whereDate('date', Carbon::today()->toDateString())->get();

            return view('cash_fund.index', compact('cashFunds'));
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
        if(Auth::check() && (Auth::user()->isAdmin() || Auth::user()->isSupervisor())){

            $currencies = Currency::all();
            $users = User::all();

            return view('cash_fund.create', compact('currencies', 'users'));
        }

        abort(401);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if (Auth::check() && (Auth::user()->isAdmin() || Auth::user()->isSupervisor())) {
            $request->validate([
                'cashier_id' => 'required',
                'currency_amount' => 'required',
            ]);

//            dd($request->all());
            $cashFund = CashFund::whereDate('date', Carbon::today()->toDateString())->where( 'cashier_id', $request->cashier_id)->first();

            if($cashFund == null){
                $cashFund = new CashFund();
                $cashFund->uid = md5(uniqid($request->cashier_id, true));
            }

            $cashFund->cashier_id = $request->cashier_id;
            $cashFund->admin_id = Auth::user()->id;
            $cashFund->date = Carbon::today()->toDateString();
            $cashFund->is_canceled = false;

//            dd($cashFund);
            if ($cashFund->save()) {
                foreach ($request->currency_amount as $id => $amount) {

                    $cashFundCurrency = CashFundCurrency::whereDate('date', Carbon::today()->toDateString())->where('currency_id', $id)->where('cash_fund_uid', $cashFund->uid)->first();
                    if($cashFundCurrency == null){
                        $cashFundCurrency = new CashFundCurrency();
                    }

                    $cashFundCurrency->currency_id = $id;
                    $cashFundCurrency->amount = $amount;
                    $cashFundCurrency->date = $cashFund->date;
                    $cashFundCurrency->cash_fund_id = $cashFund->id;
                    $cashFundCurrency->cash_fund_uid = $cashFund->uid;

                    if ($cashFundCurrency->save()) {

                    } else {
                        $cashFundCurrencies = CashFundCurrency::where('uid', $cashFund->uid)->get();
                        CashFundCurrency::destroy($cashFundCurrencies->toArray());
                        $cashFund->delete();
                        return redirect('cash-fund')->withErrors(['message' => 'impossible d\'enregistrer le fond de caisse']);
                    }
                }


                if($request->has('print')){
                    //TODO PRINT RECEPIPT
                }

                return redirect('cash-fund')->with('message', 'Fond de caisse enregistré !');
            } else {
                return redirect('cash-fund')->withErrors(['message' => 'impossible d\'enregistrer le fond de caisse']);
            }
        } else {
            abort(401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CashFund $cashFund
     * @return \Illuminate\Http\Response
     */
    public function show(CashFund $cashFund)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CashFund $cashFund
     * @return \Illuminate\Http\Response
     */
    public function edit(CashFund $cashFund)
    {
        //
        $currencies = Currency::all();
        $users = User::all();

        return view('cash_fund.edit', compact('cashFund', 'currencies', 'users'));
    }


    public function cancel($uid){

        $cashFund = CashFund::where('uid', $uid)->first();

        if($cashFund && Auth::check() && (Auth::user()->isAdmin() || Auth::user()->isSupervisor())){
            $cashFund->is_canceled = true;
            $cashFund->save();

            return redirect('cash-fund')->with('message', 'Fond de caisse annulé !');
        }else{
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\CashFund $cashFund
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CashFund $cashFund)
    {
        //
//        dd($request->all());
        $request->validate([
            'cashier_id' => 'required',
            'currency_amount' => 'required',
        ]);

        if($cashFund && Auth::check() && (Auth::user()->isAdmin() || Auth::user()->isSupervisor())){
            $cashFund->cashier_id = $request->cashier_id;
            $cashFund->admin_id = Auth::user()->id;
            $cashFund->save();

            foreach ($request->currency_amount as $id => $amount){
                $cashFundCurrency = CashFundCurrency::whereDate('date', $cashFund->date)->where('currency_id', $id)->where('cash_fund_uid', $cashFund->uid)->first();
                if($cashFundCurrency == null){
                    $cashFundCurrency = new CashFundCurrency();
                }

                $cashFundCurrency->currency_id = $id;
                $cashFundCurrency->amount = $amount;
                $cashFundCurrency->date = $cashFund->date;
                $cashFundCurrency->cash_fund_id = $cashFund->id;
                $cashFundCurrency->cash_fund_uid = $cashFund->uid;

                if ($cashFundCurrency->save()) {

                } else {
                    return redirect()->back()->withErrors(['message' => 'impossible d\'enregistrer le fond de caisse']);
                }
            }

            return redirect('cash-fund')->with('message', 'Fond de caisse mis à jour !');
        }else{
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CashFund $cashFund
     * @return \Illuminate\Http\Response
     */
    public function destroy(CashFund $cashFund)
    {
        //
    }

    public function balance($user_id){
        $user = User::find($user_id);
        if($user){
            if($user->isAdmin()){
                $cashFuns = CashFund::whereDate('date', Carbon::today()->toDateString())->where('is_canceled', false)->get();
                $currencies = Currency::all();
                $array_balance = array();
                foreach ($currencies as $currency){
                    $array_balance['utilisateur\devise'][$currency->id] = [$currency->abbreviation];
                }

                foreach ($cashFuns as $cashFun){
                    foreach ($cashFun->funds as $fund){
                        $array_balance[$cashFun->cashier->name][$fund->currency->id] = [$fund->amount];
                    }
                }

                return response()->json($array_balance, 200);
            }
        }

        return response()->json('error', 404);
    }


    public function savedeposit(Request $request){

        $request->validate([
            'cashier_id' => 'required',
            'currency_amount' => 'required',
        ]);

        $cashFund = CashFund::where('cashier_id', $request->cashier_id)->whereDate('date', Carbon::today()->toDateString())->where('is_canceled', false)->first();

        if($cashFund && Auth::check() && (Auth::user()->isAdmin() || Auth::user()->isSupervisor())){

            $deposit = new Deposit();
            $deposit->admin_id = Auth::user()->id;
            $deposit->cashier_id = $request->cashier_id;
            $deposit->date = $cashFund->date;
            $deposit->uid = md5(uniqid($request->cashier_id, true));
            $deposit->save();

            foreach ($request->currency_amount as $id => $amount){
                $cashFundCurrency = CashFundCurrency::whereDate('date', $cashFund->date)->where('currency_id', $id)->where('cash_fund_uid', $cashFund->uid)->first();
                if($cashFundCurrency != null){
                    $cashFundCurrency->amount += $amount;
                    $cashFundCurrency->save();

                    $depositCurrency = new DepositCurrency();
                    $depositCurrency->currency_id = $id;
                    $depositCurrency->amount = $amount;
                    $depositCurrency->date = $cashFundCurrency->date;
                    $depositCurrency->deposit_id = $deposit->id;
                    $depositCurrency->deposit_uid = $deposit->uid;
                    $depositCurrency->save();
                }
            }

            return redirect('cash-fund')->with('message', 'Dépot effectué !');
        }else{
            abort(404);
        }
    }

    public function deposit(){
        if(Auth::check() && (Auth::user()->isAdmin() || Auth::user()->isSupervisor())){

            $currencies = Currency::all();
            $users = User::all();

            return view('cash_fund.deposit', compact('currencies', 'users'));
        }

        abort(401);
    }

    public function print($id){
        $cashFund = CashFund::find($id);

        if($cashFund){
            $pdf = PDF::loadView('cash_fund.print', compact('cashFund'));
            return $pdf->download('Fond de caisse - '.$cashFund->created_at.'.pdf');

//            $pdf = SnappyPdf::loadView('change.print', compact('change'));
//            return $pdf->download('operation de change_'.$change->created_at.'.pdf');
////            return view('change.print', compact('change'));
        }

        abort(404);
    }
}
