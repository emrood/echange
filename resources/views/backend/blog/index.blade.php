@extends('backend.layouts.app')
@section('title') {{ 'Blog List | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Blog List'])
@endsection

@push('before-css')
    <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endpush


@section('content')
    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>No. of Comments</th>
                                            <th>Created At</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($blogs as $key=>$blog)
                                            <tr>
                                                <td>{{ $blog->id }}</td>
                                                <td>{{ $blog->title }}</td>
                                                <td>{{ $blog->comments->count() }}</td>
                                                <td>{{ $blog->created_at->diffForHumans() }}</td>
                                                <th>
                                                    @can('view-blog')
                                                        <a href="{{ url('blog/view/'.$blog->id) }}">
                                                            <button class="btn btn-success btn-sm">
                                                                <i class="fa fa-eye" aria-hidden="true"></i> View
                                                            </button>
                                                        </a>
                                                    @endcan
                                                    @can('edit-blog')
                                                        <a class="btn btn-primary btn-sm"
                                                           href="{{url('blog/edit/'.$blog->id)}}"><i
                                                                    class="fa fa-pencil-square-o"
                                                                    aria-hidden="true"></i>
                                                            Edit</a>
                                                    @endcan
                                                    @can('delete-blog')
                                                        <a class="delete btn btn-danger btn-sm"
                                                           href="{{url('blog/delete/'.$blog->id)}}"><i
                                                                    class="fa fa-trash-o"></i> Delete</a>
                                                    @endcan

                                                </th>
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
        $(document).ready(function () {
            $(document).on('click', '.delete', function (e) {
                if (!confirm('Are you sure want to delete?')) {
                    return false;

                }
            });

        });

        $(function () {
            $('#myTable').DataTable({
                "columnDefs": [
                    {"width": "40%", "targets": 1}
                ],
                "columns": [
                    null, null, null, null, {"orderable": false}
                ]
            });

        });
    </script>

@endpush