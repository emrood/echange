<?php

namespace App\Http\Controllers\Currency;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\RateHistory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Yajra\DataTables\Facades\DataTables;
use App\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        if (!Gate::allows('view-currency')) {
            return abort(401);
        }

        $currency = new Currency();
        $columns = $currency->getColumns();

        return view('currency.currency.index', compact('columns'));
    }


    public function getData(Request $request)
    {
        $currency = Currency::get();
        return DataTables::of($currency)
            ->addColumn('Abbreviation', function (Currency $currency) {
                if($currency->is_reference){
                    return $currency->abbreviation.' (référence)';
                }else{
                    return $currency->abbreviation;
                }

            })
            ->addColumn('Taux de vente', function (Currency $currency) {
                return $currency->sale_rate;
            })
            ->addColumn("Taux d'achat", function (Currency $currency) {
                return $currency->purchase_rate;
            })
            ->addColumn('Date', function (Currency $currency) {
                return $currency->date;
            })
            ->addColumn('actions', function ($q) use ($request) {
                $view = "";
                $show = view('backend.datatable.action-view')
                    ->with(['route' => asset('currency/' . $q->id), 'label' => 'currency'])
                    ->render();
                $view .= $show;
                if($q->editable){
                    $edit = view('backend.datatable.action-edit')
                        ->with(['route' => asset('currency/' . $q->id . '/edit'), 'label' => 'currency'])
                        ->render();
                    $view .= $edit;

                    $delete = view('backend.datatable.action-delete')
                        ->with(['route' => asset('currency/' . $q->id), 'label' => ' currency'])
                        ->render();

                    $view .= $delete;
                }

                return $view;

            })
            ->rawColumns(['actions'])
            ->make();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        if (!Gate::allows('add-currency')) {
            return abort(401);
        }
        return view('currency.currency.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        if (!Gate::allows('add-currency')) {
            return abort(401);
        }


        $requestData = $request->all();
        $requestData['date'] = Carbon::today()->toDateString();
        $requestData['editable'] = true;
        $requestData['is_reference'] = false;
        Currency::create($requestData);

        $rate_history = new RateHistory();
        $rate_history->user_id = Auth::user()->id;
        $rate_history->currency_id= Currency::latest()->first()->id;
        $rate_history->sale_rate = $requestData['sale_rate'];
        $rate_history->purchase_rate = $requestData['purchase_rate'];
        $rate_history->date = $requestData['date'];
        $rate_history->save();

        return redirect('currency')->with('message', 'Device ajoutée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        if (!Gate::allows('view-currency')) {
            return abort(401);
        }

        $currency = Currency::findOrFail($id);

        return view('currency.currency.show', compact('currency'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        if (!Gate::allows('edit-currency')) {
            return abort(401);
        }
        $currency = Currency::findOrFail($id);

        return view('currency.currency.edit', compact('currency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        if (!Gate::allows('edit-currency')) {
            return abort(401);
        }


        $requestData = $request->all();
        $requestData['date'] = Carbon::today()->toDateString();
        $currency = Currency::findOrFail($id);
        $currency->update($requestData);

        $rate_history = new RateHistory();
        $rate_history->user_id = Auth::user()->id;
        $rate_history->currency_id= Currency::latest()->first()->id;
        $rate_history->sale_rate = $requestData['sale_rate'];
        $rate_history->purchase_rate = $requestData['purchase_rate'];
        $rate_history->date = $requestData['date'];
        $rate_history->save();

        return redirect('currency')->with('message', 'Devise mise à jour !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        if (!Gate::allows('delete-currency')) {
            return abort(401);
        }

        Currency::destroy($id);

        return redirect('currency/currency')->with('message', 'Devise supprimée!');
    }
}
