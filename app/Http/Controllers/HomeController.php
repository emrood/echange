<?php

namespace App\Http\Controllers;

use App\Change;
use App\Currency;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('/');
    }

    public function getChartData(Request $request){

        $currencies = Currency::all();
        $chart_data = array();
        $changes = Change::selectRaw('
                            currencies.abbreviation as name,
                            SUM(given_amount) as amount,
                            AVG(given_amount) as average,
                            COUNT(*) as pourcentage'
                        )
                        ->where('canceled', 0)
                        ->groupBy('changes.from_currency_id')
                        ->join('currencies', 'changes.from_currency_id', 'currencies.id');


        $query_from_date = Carbon::today();

        if($request->query_date !== null){
            $query_from_date = Carbon::createFromFormat('m/d/Y', $request->query_date);
        }

        $changes = $changes->whereDate('changes.created_at', '=', $query_from_date);


        $changes = $changes->get();

        $qte = $changes->sum('pourcentage');
        $total = $changes->sum('amount');

        foreach ($changes as $change){
            $change->moyenne = round($change->amount * 100 / $total, 0);
            unset($change->amount);
            unset($change->average);
            unset($change->pourcentage);
//            $chart_data[$change->name] = $change->moyenne;
        }

        $total = number_format($total, 2, '.', ',').' HTG';

        return response()->json(['data' => $changes, 'quantity' => $qte, 'total' => $total], 200);
    }
}
