@extends('backend.layouts.app')
@section('title') {{ 'Gestion de caisse | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Gestion de caisse'])
@endsection

@push('before-css')
    <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endpush


@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-block text-center" style="margin-bottom: 50px; font-size: 1.2em !important;">
                            <a href="{{ url('/cash-fund/create') }}" class="btn btn-success btn-sm"
                               style=" margin-right: 20px; font-size: 0.9em !important;" title="Cash fund">
                                <i class="fa fa-plus" aria-hidden="true"></i> Enregistrer un fond de caisse
                            </a>

                            <a href="{{ url('/cash-fund/withdrawal') }}"
                               style="margin-right: 20px; font-size: 0.9em !important;"
                               class="btn btn-danger btn-sm" title="Withdrawal">
                                <i class="fa fa-arrow-up" aria-hidden="true"></i> Retrait
                            </a>

                            <a href="{{ url('/cash-fund/deposit') }}"
                               style=" margin-right: 20px; font-size: 0.9em !important;"
                               class="btn btn-info btn-sm" title="Deposit">
                                <i class="fa fa-arrow-down" aria-hidden="true"></i> Dépot
                            </a>

                            <hr/>
                        </div>

                        <form method="get">
                            <div class="container-ui" style="margin-top: -40px;">
                                <div class="row pt-3">
                                    <div class="col-md-4" style="margin: auto;">
                                        <div class="form-group row">
                                            <label class="control-label col-md-5">Utilisateur</label>
                                            <div class="input-group my-3">
                                                <select name="user_id" class="form-control custom-select">
                                                    <option {{ ($user_id == '*') ? 'selected' : '' }} value="*">Tous
                                                    </option>
                                                    @foreach($users as $u)
                                                        <option value="{{ $u->id }}" {{ ($user_id == $u->id) ? 'selected' : '' }}>{{ $u->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{--<div class="col-md-3" style="margin: auto;">--}}
                                    {{--<div class="form-group row">--}}
                                    {{--<label class="control-label col-md-5">Devise</label>--}}
                                    {{--<div class="input-group my-3">--}}
                                    {{--<select name="currency_id" class="form-control custom-select">--}}
                                    {{--<option {{ ($currency_id == '*') ? 'selected' : '' }} value="*">Tous--}}
                                    {{--</option>--}}
                                    {{--@foreach($currencies->where('is_reference', false) as $currency)--}}
                                    {{--<option {{ ($currency_id == $currency->id) ? 'selected' : '' }} value="{{$currency->id}}">{{ $currency->abbreviation }}</option>--}}
                                    {{--@endforeach--}}

                                    {{--</select>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}

                                    <div class="col-md-4" style="margin: auto;">
                                        <div class="form-group row">
                                            <label class="control-label">Période</label>
                                            <div class="input-daterange input-group my-3" id="date-range">
                                                <input type="text" class="form-control" value="{{ $from_date  }}"
                                                       name="start"/>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-info b-0 text-white">Au</span>
                                                </div>
                                                <input type="text" class="form-control" value="{{ $to_date }}"
                                                       name="end"/>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-2">
                                        <label class="control-label"> </label>
                                        <div class="input-group my-3">
                                            <input type="submit" class="btn btn-info" value="Rechercher"
                                                   style="margin-top: 8px;"/>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Fonds de caisse </h4>

                        <div class="table-responsive">
                            <table class="table table-bordered" id="myTable">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Caissier</th>
                                    <th class="text-center">Balances</th>
                                    <th class="text-center">Enregistrer par</th>
                                    <th class="text-center">Date et heure d'enregistrement</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cashFunds as $cashFund)
                                    <tr>
                                        <td class="text-center">{{ $cashFund->id }}</td>
                                        <td class="text-center">{{ $cashFund->cashier->name }}</td>
                                        <td class="text-center">
                                            @if(count($cashFund->funds) > 0)
                                                @foreach($cashFund->funds as $fund)
                                                    <span style="display: block">{{ number_format($fund->amount, 2, '.', ',').' '.$fund->currency->abbreviation }}</span>
                                                @endforeach
                                            @else
                                                <span>-------</span>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $cashFund->admin->name }}</td>
                                        <td class="text-center">{{ $cashFund->created_at }}</td>
                                        <td class="text-center">
                                            @if(!$cashFund->is_canceled)
                                                <span class="fa fa-check-circle text-success text-center"></span>
                                            @else
                                                <span class="fa fa-times-circle text-danger text-center"></span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('#') }}" class="btn btn-sm btn-primary mb-1"><i
                                                        class="icon-eye"></i></a>
                                            <a href="{{ url('/cash-fund/'.$cashFund->id.'/print') }}"
                                               class="btn btn-sm btn-info mb-1" target="_blank"><i
                                                        class="icon-printer"></i></a>
                                            @if(!$cashFund->is_canceled && \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $cashFund->created_at)->diffInDays(\Carbon\Carbon::now()) == 0)
                                                @if(!$cashFund->is_locked)
                                                    <a href="{{ route('cash-fund.edit', $cashFund) }}"
                                                       class="btn btn-sm btn-info mb-1"><i class="icon-pencil"></i></a>
                                                @endif
                                                <a href="{{ url('cash-fund/'.$cashFund->uid.'/cancel') }}"
                                                   class="btn btn-sm btn-danger delete text-white mb-1"
                                                   style="cursor:pointer;">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr/>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Dépots</h4>

                        <div class="table-responsive">
                            <table class="table table-bordered" id="deposit-table">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Caisse</th>
                                    <th class="text-center">Montants déposés</th>
                                    <th class="text-center">Effectué par</th>
                                    <th class="text-center">Date et heure d'enregistrement</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($deposits as $deposit)
                                    <tr>
                                        <td class="text-center">{{ $deposit->id }}</td>
                                        <td class="text-center">{{ $deposit->cashier->name }}</td>
                                        <td class="text-center">
                                            @if(count($deposit->deposits) > 0)
                                                @foreach($deposit->deposits as $fund)
                                                    <span style="display: block">{{ number_format($fund->amount, 2, '.', ',').' '.$fund->currency->abbreviation }}</span>
                                                @endforeach
                                            @else
                                                <span>-------</span>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $deposit->admin->name }}</td>
                                        <td class="text-center">{{ $deposit->created_at }}</td>
                                        <td class="text-center">
                                            @if(!$deposit->is_canceled)
                                                <span class="fa fa-check-circle text-success text-center"></span>
                                            @else
                                                <span class="fa fa-times-circle text-danger text-center"></span>
                                            @endif
                                        </td>
                                        <td>
                                            {{--<a href="{{ url('#') }}" class="btn btn-sm btn-primary mb-1"><i--}}
                                                        {{--class="icon-eye"></i></a>--}}
                                            @php
                                                //dd(\Carbon\Carbon::today()->diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $deposit->created_at)))
                                            @endphp

                                            <a href="{{ url('/cash-fund/'.$deposit->id.'/deposit/print') }}" target="_blank"
                                               class="btn btn-sm btn-info mb-1"><i class="icon-printer"></i></a>
                                            @if(!$deposit->is_canceled && \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $deposit->created_at)->diffInDays(\Carbon\Carbon::now()) == 0)
                                                <a href="{{ url('cash-fund/'.$deposit->uid.'/cancel/deposit') }}"
                                                   class="btn btn-sm btn-danger delete text-white mb-1"
                                                   style="cursor:pointer;">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr/>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Retraits</h4>

                        <div class="table-responsive">
                            <table class="table table-bordered" id="withdrawal-table">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Caisse</th>
                                    <th class="text-center">Montants retirés</th>
                                    <th class="text-center">Effectué par</th>
                                    <th class="text-center">Date et heure d'enregistrement</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($withdrawals as $withdrawal)
                                    <tr>
                                        <td class="text-center">{{ $withdrawal->id }}</td>
                                        <td class="text-center">{{ $withdrawal->cashier->name }}</td>
                                        <td class="text-center">
                                            @if(count($withdrawal->withdrawals) > 0)
                                                @foreach($withdrawal->withdrawals as $fund)
                                                    <span style="display: block">{{ number_format($fund->amount, 2, '.', ',').' '.$fund->currency->abbreviation }}</span>
                                                @endforeach
                                            @else
                                                <span>-------</span>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $withdrawal->admin->name }}</td>
                                        <td class="text-center">{{ $withdrawal->created_at }}</td>
                                        <td class="text-center">
                                            @if(!$withdrawal->is_canceled)
                                                <span class="fa fa-check-circle text-success text-center"></span>
                                            @else
                                                <span class="fa fa-times-circle text-danger text-center"></span>
                                            @endif
                                        </td>
                                        <td>
                                            {{--<a href="{{ url('#') }}" class="btn btn-sm btn-primary mb-1"><i--}}
                                            {{--class="icon-eye"></i></a>--}}
                                            <a href="{{ url('/cash-fund/'.$withdrawal->id.'/withdrawal/print') }}" target="_blank"
                                               class="btn btn-sm btn-info mb-1"><i class="icon-printer"></i></a>
                                            @if(!$withdrawal->is_canceled && \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $withdrawal->created_at)->diffInDays(\Carbon\Carbon::now()) == 0)
                                                <a href="{{ url('cash-fund/'.$withdrawal->uid.'/cancel/withdrawal') }}"
                                                   class="btn btn-sm btn-danger delete text-white mb-1"
                                                   style="cursor:pointer;">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




@push('js')
    <!--This page plugins -->
    <script src="{{asset('assets/libs/moment/moment.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="{{asset('dist/js/pages/datatable/datatable-basic.init.js')}}"></script>
    <script>

        $('#myTable').DataTable({
            dom: 'Bfrtip',
            "displayLength": 25,
            "order": [
                [4, 'asc']
            ],
            pageLength: "50",
            buttons: [
                {
                    extend: 'print',
                    orientation: 'landscape',
                    title: 'Rapport de caisse {{' du '.strftime("%d/%m/%Y", strtotime($from_date)).' au '.strftime("%d/%m/%Y", strtotime($to_date)) }}',
                    customize: function (win) {
                        $(win.document.body).find('h1').css('text-align', 'center');
                    },
                    className: 'btn btn-info'
                },
                {
                    extend: 'copy',
                    title: 'Rapport de caisse {{' du '.$from_date.' au '.$to_date }}',
                    className: 'btn btn-info'
                },
                {
                    extend: 'excel',
                    title: 'Rapport de caisse {{' en date du '.$from_date.' au '.$to_date }}',
                    className: 'btn btn-info'
                },
                {
                    extend: 'csv',
                    title: 'Rapport de caisse {{' en date du '.$from_date.' au '.$to_date }}',
                    className: 'btn btn-info'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'Rapport de caisse {{' en date du '.$from_date.' au '.$to_date }}',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                    className: 'btn btn-info'
                },
                // 'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

        $('#deposit-table').DataTable({
            dom: 'Bfrtip',
            "displayLength": 25,
            "order": [
                [4, 'asc']
            ],
            pageLength: "50",
            buttons: [
                {
                    extend: 'print',
                    orientation: 'landscape',
                    title: 'Dépot de caisse {{' du '.strftime("%d/%m/%Y", strtotime($from_date)).' au '.strftime("%d/%m/%Y", strtotime($to_date)) }}',
                    customize: function (win) {
                        $(win.document.body).find('h1').css('text-align', 'center');
                    },
                    className: 'btn btn-info'
                },
                {
                    extend: 'copy',
                    title: 'Dépot de caisse {{' du '.$from_date.' au '.$to_date }}',
                    className: 'btn btn-info'
                },
                {
                    extend: 'excel',
                    title: 'Dépot de caisse {{' en date du '.$from_date.' au '.$to_date }}',
                    className: 'btn btn-info'
                },
                {
                    extend: 'csv',
                    title: 'Dépot de caisse {{' en date du '.$from_date.' au '.$to_date }}',
                    className: 'btn btn-info'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'Dépot de caisse {{' en date du '.$from_date.' au '.$to_date }}',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                    className: 'btn btn-info'
                },
                // 'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

        $('#withdrawal-table').DataTable({
            dom: 'Bfrtip',
            "displayLength": 25,
            "order": [
                [4, 'asc']
            ],
            pageLength: "50",
            buttons: [
                {
                    extend: 'print',
                    orientation: 'landscape',
                    title: 'Dépot de caisse {{' du '.strftime("%d/%m/%Y", strtotime($from_date)).' au '.strftime("%d/%m/%Y", strtotime($to_date)) }}',
                    customize: function (win) {
                        $(win.document.body).find('h1').css('text-align', 'center');
                    },
                    className: 'btn btn-info'
                },
                {
                    extend: 'copy',
                    title: 'Dépot de caisse {{' du '.$from_date.' au '.$to_date }}',
                    className: 'btn btn-info'
                },
                {
                    extend: 'excel',
                    title: 'Dépot de caisse {{' en date du '.$from_date.' au '.$to_date }}',
                    className: 'btn btn-info'
                },
                {
                    extend: 'csv',
                    title: 'Dépot de caisse {{' en date du '.$from_date.' au '.$to_date }}',
                    className: 'btn btn-info'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'Dépot de caisse {{' en date du '.$from_date.' au '.$to_date }}',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                    className: 'btn btn-info'
                },
                // 'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

        jQuery('.mydatepicker, #datepicker, .input-group.date').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true,
            dateFormat: 'dd/dm/yyyyy'
        });
        jQuery('#date-range').datepicker({
            toggleActive: true,
            dateFormat: 'dd/dm/yyyyy'
        });
        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true,
            dateFormat: 'dd/dm/yyyyy'
        });

        (function () {
            var id = "{!! (Session::has('cashFund'))? Session::get('cashFund')->id : 0 !!}";
            var deposit_id = "{!! (Session::has('deposit'))? Session::get('deposit')->id : 0 !!}";
            var withdrawal_id = "{!! (Session::has('withdrawal'))? Session::get('withdrawal')->id : 0 !!}";
            console.log(deposit_id);
            if (id != 0) {
                window.open('/cash-fund/' + id + '/print', '_blank');
            }

            if (deposit_id != 0) {
                window.open('/cash-fund/' + deposit_id + '/deposit/print', '_blank');
            }

            if (withdrawal_id != 0) {
                window.open('/cash-fund/' + withdrawal_id + '/withdrawal/print', '_blank');
            }
        })();
    </script>

@endpush


