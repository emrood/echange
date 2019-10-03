@extends('backend.layouts.app')
@section('title') {{ 'Fond de caisse | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Fond de caisse'])
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
                        <div class="d-block text-center" style="margin-bottom: 10px;">
                            <a href="{{ url('/cash-fund/create') }}" class="btn btn-success btn-sm" title="Add New Currency">
                                <i class="fa fa-plus" aria-hidden="true"></i> Enregistrer un fond de caisse
                            </a>
                        </div>

                        <div class="table-responsive" >
                            <table class="table table-bordered" id="myTable">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Caissier</th>
                                    <th class="text-center">Devises</th>
                                    <th class="text-center">Enregistrer par</th>
                                    <th class="text-center">Date et heure</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($cashFunds as $cashFund)
                                        <tr>
                                            <td class="text-center">{{ $cashFund->id }}</td>
                                            <td class="text-center">{{ $cashFund->cashier->name }}</td>
                                            <td class="text-center">{{ count($cashFund->funds) }}</td>
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
                                                <a href="{{ url('#') }}" class="btn btn-sm btn-primary mb-1"><i class="icon-eye"></i></a>
                                                @if(!$cashFund->is_canceled)
                                                    <a href="{{ route('cash-fund.edit', $cashFund) }}" class="btn btn-sm btn-info mb-1"><i class="icon-pencil"></i></a>
                                                    <a href="{{ url('cash-fund/'.$cashFund->uid.'/cancel') }}" class="btn btn-sm btn-danger delete text-white mb-1" style="cursor:pointer;">
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
        // $(document).on('click', '.delete', function (e) {
        //     if (confirm('Are you sure want to delete?')) {
        //         $(this).find('form').submit();
        //     } else {
        //         e.preventDefault();
        //         return false;
        //     }
        // });

        $('#myTable').DataTable();
        {{--var route = '{{asset('currency/get-data')}}';--}}

        {{--$('#myTable').DataTable({--}}
            {{--processing: true,--}}
            {{--serverSide: true,--}}
            {{--iDisplayLength: 10,--}}
            {{--retrieve: true,--}}
            {{--ajax: route,--}}
            {{--columns: [--}}
                    {{--{data: "DT_RowIndex", name: 'DT_RowIndex',width:'5%'},--}}
                    {{--@foreach($columns as $column)--}}
                    {{--{--}}
                    {{--data: "{{$column}}", name: '{{$column}}'--}}
                    {{--},--}}
                    {{--@endforeach--}}
                    {{--{--}}
                    {{--data: "actions", name: "actions"--}}
                    {{--}--}}
                    {{--],--}}
            {{--columns: [--}}
                {{--{data: 'id', name: 'id'},--}}
                {{--{data: 'Abbreviation', name: 'abbreviation'},--}}
                {{--{data: 'sale_rate', name: 'sale_rate'},--}}
                {{--{data: 'purchase_rate', name: 'purchase_rate'},--}}
                {{--{data: 'date', name: 'date'},--}}
                {{--{data: 'actions', name: 'actions'}--}}
            {{--],--}}

        {{--});--}}
    </script>

@endpush


