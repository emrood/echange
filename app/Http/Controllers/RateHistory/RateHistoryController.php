<?php

namespace App\Http\Controllers\RateHistory;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Yajra\DataTables\Facades\DataTables;
use App\RateHistory;
use Illuminate\Http\Request;

class RateHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        if (!Gate::allows('view-ratehistory')) {
            return abort(401);
        }

        $ratehistory = new RateHistory();
        $columns = $ratehistory->getColumns();

        return view('rate_history.rate-history.index', compact('columns'));
    }


    public function getData(Request $request)
    {

        setlocale(LC_ALL, "fr_FR");
        setlocale(LC_TIME, "fr_FR");


        $ratehistory = RateHistory::get();
        return DataTables::of($ratehistory)
            ->addIndexColumn()
            ->addColumn('utilisateur', function (RateHistory $history) {
//                    dd($history->user());
                return $history->user()->name;
            })
            ->addColumn('Devise', function (RateHistory $history) {
                return $history->currency()->abbreviation;
            })
            ->addColumn('Taux de vente', function (RateHistory $history) {
                return $history->sale_rate;
            })
            ->addColumn("Taux d'achat", function (RateHistory $history) {
                return $history->purchase_rate;
            })
            ->addColumn('Date', function (RateHistory $history) {

                return strftime("%c", strtotime($history->updated_at));
            })
            ->make();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        if (!Gate::allows('add-ratehistory')) {
            return abort(401);
        }
        return view('rate_history.rate-history.create');
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
        if (!Gate::allows('add-ratehistory')) {
            return abort(401);
        }

        $this->validate($request, [
            'user_id' => 'required',
            'currency_id' => 'required',
            'sale_rate' => 'required',
            'purchase_rate' => 'required',
            'date' => 'required'
        ]);
        $requestData = $request->all();

        RateHistory::create($requestData);

        return redirect('history/rate-history')->with('message', 'RateHistory added!');
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
        if (!Gate::allows('view-ratehistory')) {
            return abort(401);
        }

        $ratehistory = RateHistory::findOrFail($id);

        return view('rate_history.rate-history.show', compact('ratehistory'));
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
        if (!Gate::allows('edit-ratehistory')) {
            return abort(401);
        }
        $ratehistory = RateHistory::findOrFail($id);

        return view('rate_history.rate-history.edit', compact('ratehistory'));
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
        if (!Gate::allows('edit-ratehistory')) {
            return abort(401);
        }

        $this->validate($request, [
            'user_id' => 'required',
            'currency_id' => 'required',
            'sale_rate' => 'required',
            'purchase_rate' => 'required',
            'date' => 'required'
        ]);
        $requestData = $request->all();

        $ratehistory = RateHistory::findOrFail($id);
        $ratehistory->update($requestData);

        return redirect('history/rate-history')->with('message', 'RateHistory updated!');
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
        if (!Gate::allows('delete-ratehistory')) {
            return abort(401);
        }

        RateHistory::destroy($id);

        return redirect('history/rate-history')->with('message', 'RateHistory deleted!');
    }
}
