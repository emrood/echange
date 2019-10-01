@extends('backend.layouts.app')
@section('title') {{ 'Activity Log | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Activity Log'])
@endsection

@push('before-css')
    <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="panel panel-primary ">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered width100" id="myTable">
                                        <thead>
                                        <tr class="filters">
                                            <th>UserID</th>
                                            <th>User Name</th>
                                            <th>Description</th>
                                            <th>Created At</th>
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
            </div>
        </div>

    </div>
@endsection

@push('js')
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
        $(function () {
            var table = $('#myTable').DataTable({
                "order": [[3, "desc"]],
                processing: true,
                serverSide: true,
                ajax: '/activity-log/data',
                columns: [
                    {data: 'causer_id', name: 'causer_id'},
                    {data: 'log_name', name: 'log_name'},
                    {data: 'description', name: 'description'},
                    {data: 'created_at', name: 'created_at'}
                ]
            });
        });
    </script>
@endpush