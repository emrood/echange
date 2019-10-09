<?php

namespace App\Http\Controllers;

use App\CashFund;
use App\CashFundCurrency;
use App\Currency;
use App\Deposit;
use App\DepositCurrency;
use App\User;
use App\Withdrawal;
use App\WithdrawalCurrency;
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
    public function index(Request $request)
    {
        //

        if (Auth::check() && (Auth::user()->isAdmin() || Auth::user()->isSupervisor())) {

            ini_set('memory_limit', '3096M');

            $query_from_date = Carbon::today()->toDateString();
            $query_to_date = Carbon::today()->toDateString();
            $from_date = Carbon::today()->format('m/d/Y');
            $to_date = Carbon::today()->format('m/d/Y');
            $users = User::all();
            $currencies = Currency::all();
            $user_id = '*';
            $currency_id = '*';

            $cashFunds = CashFund::orderBy('created_at', 'desc');
            $deposits = Deposit::orderBy('created_at', 'desc');
            $withdrawals = Withdrawal::orderBy('created_at', 'desc');

            if(!empty($request->all())){
                $user_id = $request->user_id;
//                $currency_id = $request->currency_id;
                $from_date = $request->start;
                $to_date= $request->end;
                $query_from_date = Carbon::createFromFormat('m/d/Y', $from_date)->toDateString();
                $query_to_date = Carbon::createFromFormat('m/d/Y', $to_date)->toDateString();
            }

            $cashFunds = $cashFunds->whereDate('date', '>=' ,$query_from_date)->whereDate('date', '<=' ,$query_to_date);
            $deposits = $deposits->whereDate('date', '>=' ,$query_from_date)->whereDate('date', '<=' ,$query_to_date);
            $withdrawals= $withdrawals->whereDate('date', '>=' ,$query_from_date)->whereDate('date', '<=' ,$query_to_date);

            if($user_id != '*'){
                $cashFunds = $cashFunds->where('cashier_id', (int) $user_id);
                $deposits = $deposits->where('cashier_id', (int) $user_id);
                $withdrawals = $withdrawals->where('cashier_id', (int) $user_id);
            }

            $cashFunds = $cashFunds->get();
            $deposits = $deposits->get();
            $withdrawals = $withdrawals->get();

            return view('cash_fund.index', compact('cashFunds', 'deposits', 'withdrawals', 'user_id', 'currency_id', 'from_date', 'to_date', 'users', 'currencies'));
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
        if (Auth::check() && (Auth::user()->isAdmin() || Auth::user()->isSupervisor())) {

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
            $cashFund = CashFund::whereDate('date', Carbon::today()->toDateString())->where('cashier_id', $request->cashier_id)->first();

            if ($cashFund == null) {
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
                    if ($cashFundCurrency == null) {
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


                if ($request->has('print')) {
                    //TODO PRINT RECEPIPT
                }

                return redirect('cash-fund')->with('message', 'Fond de caisse enregistré !')->with('cashFund', $cashFund);
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


    public function cancel($uid)
    {

        $cashFund = CashFund::where('uid', $uid)->first();

        if ($cashFund && Auth::check() && (Auth::user()->isAdmin() || Auth::user()->isSupervisor())) {
            $cashFund->is_canceled = true;
            $cashFund->save();

            return redirect('cash-fund')->with('message', 'Fond de caisse annulé !');
        } else {
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

        if ($cashFund && Auth::check() && (Auth::user()->isAdmin() || Auth::user()->isSupervisor())) {
            $cashFund->cashier_id = $request->cashier_id;
            $cashFund->admin_id = Auth::user()->id;
            $cashFund->save();

            foreach ($request->currency_amount as $id => $amount) {
                $cashFundCurrency = CashFundCurrency::whereDate('date', $cashFund->date)->where('currency_id', $id)->where('cash_fund_uid', $cashFund->uid)->first();
                if ($cashFundCurrency == null) {
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

            return redirect('cash-fund')->with('message', 'Fond de caisse mis à jour !')->with('cashFund', $cashFund);
        } else {
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

    public function balance($user_id)
    {
        $user = User::find($user_id);
        if ($user) {
            if ($user->isAdmin()) {
                $cashFuns = CashFund::whereDate('date', Carbon::today()->toDateString())->where('is_canceled', false)->get();
                $currencies = Currency::all();
                $array_balance = array();
                foreach ($currencies as $currency) {
                    $array_balance['utilisateur\devise'][$currency->id] = [$currency->abbreviation];
                }

                foreach ($cashFuns as $cashFun) {
                    foreach ($cashFun->funds as $fund) {
                        $array_balance[$cashFun->cashier->name][$fund->currency->id] = [$fund->amount];
                    }
                }

                return response()->json($array_balance, 200);
            }
        }

        return response()->json('error', 404);
    }


    public function savedeposit(Request $request)
    {

        $request->validate([
            'cashier_id' => 'required',
            'currency_amount' => 'required',
        ]);

        $cashFund = CashFund::where('cashier_id', $request->cashier_id)->whereDate('date', Carbon::today()->toDateString())->where('is_canceled', false)->first();

        if ($cashFund && Auth::check() && (Auth::user()->isAdmin() || Auth::user()->isSupervisor())) {

            $deposit = new Deposit();
            $deposit->admin_id = Auth::user()->id;
            $deposit->cashier_id = $request->cashier_id;
            $deposit->date = $cashFund->date;
            $deposit->uid = md5(uniqid($request->cashier_id, true));
            $deposit->save();

            foreach ($request->currency_amount as $id => $amount) {
                $cashFundCurrency = CashFundCurrency::whereDate('date', $cashFund->date)->where('currency_id', $id)->where('cash_fund_uid', $cashFund->uid)->first();
                if ($cashFundCurrency != null) {
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

            return redirect('cash-fund')->with('message', 'Dépot effectué !')->with('deposit', $deposit);
        } else {
            abort(404);
        }
    }

    public function deposit()
    {
        if (Auth::check() && (Auth::user()->isAdmin() || Auth::user()->isSupervisor())) {

            $currencies = Currency::all();
            $users = User::all();

            return view('cash_fund.deposit', compact('currencies', 'users'));
        }

        abort(401);
    }

    public function withdrawal()
    {
        if (Auth::check() && (Auth::user()->isAdmin() || Auth::user()->isSupervisor())) {

            $currencies = Currency::all();
            $users = User::all();

            return view('cash_fund.withdrawal', compact('currencies', 'users'));
        }

        abort(401);
    }

    public function savewithdrawal(Request $request)
    {

        $request->validate([
            'cashier_id' => 'required',
            'currency_amount' => 'required',
        ]);

        $cashFund = CashFund::where('cashier_id', $request->cashier_id)->whereDate('date', Carbon::today()->toDateString())->where('is_canceled', false)->first();

        if ($cashFund && Auth::check() && (Auth::user()->isAdmin() || Auth::user()->isSupervisor())) {

            $withdrawal = new Withdrawal();
            $withdrawal->admin_id = Auth::user()->id;
            $withdrawal->cashier_id = $request->cashier_id;
            $withdrawal->date = $cashFund->date;
            $withdrawal->uid = md5(uniqid($request->cashier_id, true));
            $withdrawal->save();

            foreach ($request->currency_amount as $id => $amount) {
                $cashFundCurrency = CashFundCurrency::whereDate('date', $cashFund->date)->where('currency_id', $id)->where('cash_fund_uid', $cashFund->uid)->first();
                if ($cashFundCurrency != null) {
                    $cashFundCurrency->amount -= $amount;
                    $cashFundCurrency->save();

                    $withdrawalCurrency = new WithdrawalCurrency();
                    $withdrawalCurrency->currency_id = $id;
                    $withdrawalCurrency->amount = $amount;
                    $withdrawalCurrency->date = $cashFundCurrency->date;
                    $withdrawalCurrency->withdrawal_id = $withdrawal->id;
                    $withdrawalCurrency->withdrawal_uid = $withdrawal->uid;
                    $withdrawalCurrency->save();
                }
            }

            return redirect('cash-fund')->with('message', 'Retrait effectué !')->with('withdrawal', $withdrawal);
        } else {
            abort(404);
        }
    }

    public function print($id)
    {
        $cashFund = CashFund::find($id);

        if ($cashFund) {

            $pdf = PDF::loadView('cash_fund.thermalprint', compact('cashFund'));
//            return $pdf->download('Fond de caisse - ' . $cashFund->created_at . '.pdf');
            return $pdf->stream('Fond de caisse - ' . $cashFund->created_at . '.pdf');
        }

        abort(404);
    }

    public function printdeposit($id)
    {
        $deposit = Deposit::find($id);

        if ($deposit) {
//            return view('cash_fund.thermaldeposit', compact('deposit'));
            $pdf = PDF::loadView('cash_fund.thermaldeposit', compact('deposit'));
//            return $pdf->download('depot de caisse - ' . $cashFund->created_at . '.pdf');
            return $pdf->stream('depot de caisse - ' . $deposit->created_at . '.pdf');

        }

        abort(404);
    }

    public function printwithdrawal($id)
    {
        $withdrawal = Withdrawal::find($id);

        if ($withdrawal) {
//            return view('cash_fund.thermaldeposit', compact('deposit'));
            $pdf = PDF::loadView('cash_fund.thermalwithdrawal', compact('withdrawal'));
//            return $pdf->download('depot de caisse - ' . $cashFund->created_at . '.pdf');
            return $pdf->stream('depot de caisse - ' . $withdrawal->created_at . '.pdf');

        }

        abort(404);
    }


    public function cancelWithdrawal($uid){

        $withdrawal = Withdrawal::where('uid', $uid)->first();

        if($withdrawal && Auth::check() && Auth::user()->isAdmin()){
            $cashFund = CashFund::where('cashier_id', $withdrawal->cashier_id)->whereDate('date', Carbon::today()->toDateString())->where('is_canceled', false)->first();
            if($cashFund){
                foreach ($withdrawal->withdrawals as $fund){
                    $cashFundCurrency = CashFundCurrency::whereDate('date', $cashFund->date)->where('currency_id', $fund->currency_id)->where('cash_fund_uid', $cashFund->uid)->first();
                    if ($cashFundCurrency != null) {
                        $cashFundCurrency->amount += $fund->amount;
                        $cashFundCurrency->save();
                    }
                }

                $withdrawal->is_canceled = true;
                $withdrawal->save();

                return redirect()->back()->with('message', 'Retrait annulé');
            }
        }

        abort(404);
    }


    public function cancelDeposit($uid){

        $deposit = Deposit::where('uid', $uid)->first();
        if($deposit && Auth::check() && Auth::user()->isAdmin()){
            $cashFund = CashFund::where('cashier_id', $deposit->cashier_id)->whereDate('date', Carbon::today()->toDateString())->where('is_canceled', false)->first();
            if($cashFund){
                foreach ($deposit->deposits as $fund){
                    $cashFundCurrency = CashFundCurrency::whereDate('date', $cashFund->date)->where('currency_id', $fund->currency_id)->where('cash_fund_uid', $cashFund->uid)->first();

                    if ($cashFundCurrency != null) {
                        $cashFundCurrency->amount -= $fund->amount;
                        $cashFundCurrency->save();
                    }
                }

                $deposit->is_canceled = true;
                $deposit->save();
                return redirect()->back()->with('message', 'Dépot annulé');
            }
        }

        abort(404);
    }
}
