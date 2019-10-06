@extends('backend.layouts.app')
@section('title') {{ 'Opération de change | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs', ['current' => 'Opération de change'])
@endsection

@push('before-css')
@endpush

<?php
setlocale(LC_ALL, "fr_FR");
setlocale(LC_TIME, "fr_FR");
?>
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $change->user->name }} @if($change->canceled) (Annulée) @endif  <a href="{{ url('/change/'.$change->id.'/print') }}" class="btn btn-sm btn-info mb-1"><i class="icon-printer"></i></a> </h4>
                        <h6 class="card-subtitle">{{ strftime("%e %B %Y %r", strtotime($change->created_at))  }}</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-one">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Montant recu</th>
                                <th scope="col">Taux utilisé</th>
                                <th scope="col">Montant rendu</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-danger">{{ $change->amount_received.' '.$change->fromCurrency->abbreviation  }}</th>
                                    <td>{{ $change->rate_used }}</td>
                                    <td >{{ $change->given_amount.' '.$change->toCurrency->abbreviation }}</td>
                                </tr>
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

    </script>
@endpush
