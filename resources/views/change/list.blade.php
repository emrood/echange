@extends('backend.layouts.app')
@section('title') {{ 'Liste des transactions | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs', ['current' => 'Liste des transactions '])
@endsection

@push('before-css')
@endpush

@php
    setlocale(LC_ALL,"fr_FR");
    setlocale(LC_TIME, "fr_FR");
    ini_set('memory_limit', '3096M');



$total = array();
$percentage = array();
$bigTotal = 0;

   foreach ($currencies as $currency){
        $total[$currency->id] = 0;
        $bigTotal += $total[$currency->id] * $currency->sale_rate;
   }


   foreach ($changes->where('canceled', false) as $change){
      $total[$change->to_currency_id] += $change->given_amount;
      $total[$change->from_currency_id] += $change->amount_received;
   }

  //  foreach ($currencies as $currency){
   //     $percentage[$currency->id] = $total[$currency->id] * 100 / $bigTotal;
  //  }

//dd($total);
@endphp

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 center-block" style="margin-left: auto; margin-right: auto">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="get">
                            <div class="container-ui">
                                <div class="row pt-3">
                                    <div class="col-md-3" style="margin: auto;">
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

                                    <div class="col-md-3" style="margin: auto;">
                                        <div class="form-group row">
                                            <label class="control-label col-md-5">Devise</label>
                                            <div class="input-group my-3">
                                                <select name="currency_id" class="form-control custom-select">
                                                    <option {{ ($currency_id == '*') ? 'selected' : '' }} value="*">Tous
                                                    </option>
                                                    @foreach($currencies->where('is_reference', false) as $currency)
                                                        <option {{ ($currency_id == $currency->id) ? 'selected' : '' }} value="{{$currency->id}}">{{ $currency->abbreviation }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>

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

                                    <div class="col-md-1">
                                        <label class="control-label">  </label>
                                        <div class="input-group my-3">
                                            <input type="submit" class="btn btn-info" value="Rechercher" style="margin-top: 8px;"/>
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

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Transactions de change :</h4>
                        <h6 class="card-subtitle">Le classement est fait selon les options selectionnées dans les
                            filtres</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-one">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Utilisateur</th>
                                <th scope="col">Montant recu</th>
                                <th scope="col">Montant rendu</th>
                                <th scope="col">Date et heure</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($changes as $change)
                                <tr>
                                    <th scope="row">{{ $change->id }}</th>
                                    <td>{{ $change->user->name }}</td>
                                    <td class="text-danger">{{ $change->amount_received.' '.$change->fromCurrency->abbreviation }}</td>
                                    <td>{{ $change->given_amount.' '.$change->toCurrency->abbreviation }}</td>
                                    <td>{{ $change->created_at }}</td>
                                    <td>
                                        @if(!$change->canceled)
                                            <span class="fa fa-check-circle text-success text-center"></span>
                                        @else
                                            <span class="fa fa-times-circle text-danger text-center"></span>
                                        @endif

                                    </td>
                                    <td>
                                        <a href="{{ route('change.show', $change) }}" class="btn btn-sm btn-primary mb-1"><i class="icon-eye"></i></a>
                                        <a href="{{ url('/change/'.$change->id.'/print') }}" class="btn btn-sm btn-info mb-1"><i class="icon-printer"></i></a>

                                        @if(!$change->canceled && (Auth::user()->isAdmin() || Auth::user()->isSupervisor()))
                                            <a href="{{ url('change/'.$change->id.'/cancel') }}" alt="annulée"
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

        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col text-danger">Total</th>
                                @foreach($currencies as $currency)
                                    <th scope="col">{{ $total[$currency->id].' '.$currency->abbreviation.' ' }} @if($currency->is_reference) <span class="fa fa-arrow-down" style="color: red;"></span> @else <span class="fa fa-arrow-up" style="color: green;"></span>  @endif</th>
                                @endforeach
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('js')
    <!-- This Page JS -->
    <script src="{{asset('assets/libs/moment/moment.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <!--This page plugins -->
    <script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="{{asset('dist/js/pages/datatable/datatable-basic.init.js')}}"></script>
    <script>
        // Date Picker
        jQuery('.mydatepicker, #datepicker, .input-group.date').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#date-range').datepicker({
            toggleActive: true
        });
        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true
        });

        // $('.table-changes').dataTable();
        $('.table-one').dataTable();
    </script>
@endpush
