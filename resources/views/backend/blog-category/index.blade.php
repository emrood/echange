@extends('backend.layouts.app')
@section('title') {{ 'Blog Categories | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Blog Categories'])
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
                        @can('add-blog-category')
                            <div class="d-block text-center">

                            <a class="btn btn-success pull-right" href="{{url('blog-category/create')}}">
                                <i class="icon-plus"></i> Add Blog Category</a>
                            </div>
                        @endcan
                        <div class="row justify-content-center">
                            <div class="col-12 align-content-center">
                                @can('view-blog-category')
                                    <div class="table-responsive">
                                        <table id="myTable" class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Title</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categories as $key=>$category)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$category->title}}</td>
                                                    <th>
                                                        @can('edit-blog-category')
                                                            <a class="btn btn-info btn-sm"
                                                               href="{{url('blog-category/edit/'.$category->id)}}"><i
                                                                        class="fa fa-pencil-square-o"
                                                                        aria-hidden="true"></i>
                                                                Edit</a>
                                                        @endcan

                                                        &nbsp;@can('delete-blog-category')
                                                            <a class="delete btn btn-danger btn-sm"
                                                               href="{{url('blog-category/delete/'.$category->id)}}"><i
                                                                        class="fa fa-trash-o"></i> Delete</a>

                                                        @endcan &nbsp;
                                                    </th>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                @endcan
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
    <!-- end - This is for export functionality only -->
    <script>
        $(document).ready(function () {
            $(document).on('click', '.delete', function (e) {
                if (!confirm('Are you sure want to delete?')) {
                    return false;
                }

            });
        })

        $(function () {
            $('#myTable').DataTable({
                "columns": [
                    null, null, {"orderable": false}
                ]
            });

        });
    </script>

@endpush