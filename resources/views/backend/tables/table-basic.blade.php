@extends('backend.layouts.app')
@section('title') {{ 'Basic Table | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Basic Table'])
@endsection

@push('after-css')
    <!-- This Page CSS -->
@endpush
@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic Table</h4>
                        <h6 class="card-subtitle">Add class <code>.table</code></h6>
                        <div class="table-responsive mt-3">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Deshmukh</td>
                                    <td>Prohaska</td>
                                    <td>@Genelia</td>
                                    <td><span class="label label-danger">admin</span> </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Deshmukh</td>
                                    <td>Gaylord</td>
                                    <td>@Ritesh</td>
                                    <td><span class="label label-info">member</span> </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sanghani</td>
                                    <td>Gusikowski</td>
                                    <td>@Govinda</td>
                                    <td><span class="label label-warning">developer</span> </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Roshan</td>
                                    <td>Rogahn</td>
                                    <td>@Hritik</td>
                                    <td><span class="label label-success">supporter</span> </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Doe</td>
                                    <td>Hickle</td>
                                    <td>@Maruti</td>
                                    <td><span class="label label-info">member</span> </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Nigam</td>
                                    <td>Eichmann</td>
                                    <td>@Sonu</td>
                                    <td><span class="label label-success">supporter</span> </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bordered Table</h4>
                        <h6 class="card-subtitle">Add<code>.table-bordered</code>for borders on all sides of
                            the table and cells.</h6>
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Task</th>
                                    <th>Progress</th>
                                    <th>Deadline</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Lunar probe project</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 35%"></div>
                                        </div>
                                    </td>
                                    <td>May 15, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i
                                                    class="fas fa-pencil-alt text-inverse m-r-10"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i
                                                    class="fas fa-times text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dream successful plan</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 50%"></div>
                                        </div>
                                    </td>
                                    <td>July 1, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i
                                                    class="fas fa-pencil-alt text-inverse m-r-10"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i
                                                    class="fas fa-times text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Office automatization</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 100%"></div>
                                        </div>
                                    </td>
                                    <td>Apr 12, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i
                                                    class="fas fa-pencil-alt text-inverse m-r-10"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i
                                                    class="fas fa-times text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>The sun climbing plan</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td>Aug 9, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i
                                                    class="fas fa-pencil-alt text-inverse m-r-10"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i
                                                    class="fas fa-times text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Open strategy</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 85%"></div>
                                        </div>
                                    </td>
                                    <td>Apr 2, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i
                                                    class="fas fa-pencil-alt text-inverse m-r-10"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i
                                                    class="fas fa-times text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tantas earum numeris</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 50%"></div>
                                        </div>
                                    </td>
                                    <td>July 11, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i
                                                    class="fas fa-pencil-alt text-inverse m-r-10"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i
                                                    class="fas fa-times text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Striped Table</h4>
                        <h6 class="card-subtitle">Add<code>.table-striped</code></h6>
                        <div class="table-responsive mt-3">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Task</th>
                                    <th>Progress</th>
                                    <th>Deadline</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Lunar probe project</td>
                                    <td>
                                        <div class="progress progress-xs margin-vertical-10 ">
                                            <div class="progress-bar progress-bar-danger" style="width: 35%"></div>
                                        </div>
                                    </td>
                                    <td>May 15, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i
                                                    class="fas fa-pencil-alt text-inverse m-r-10"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i
                                                    class="fas fa-times text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dream successful plan</td>
                                    <td>
                                        <div class="progress progress-xs margin-vertical-10 ">
                                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                        </div>
                                    </td>
                                    <td>July 1, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i
                                                    class="fas fa-pencil-alt text-inverse m-r-10"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i
                                                    class="fas fa-times text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Office automatization</td>
                                    <td>
                                        <div class="progress progress-xs margin-vertical-10 ">
                                            <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                                        </div>
                                    </td>
                                    <td>Apr 12, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i
                                                    class="fas fa-pencil-alt text-inverse m-r-10"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i
                                                    class="fas fa-times text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>The sun climbing plan</td>
                                    <td>
                                        <div class="progress progress-xs margin-vertical-10 ">
                                            <div class="progress-bar progress-bar-primary" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td>Aug 9, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i
                                                    class="fas fa-pencil-alt text-inverse m-r-10"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i
                                                    class="fas fa-times text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Open strategy</td>
                                    <td>
                                        <div class="progress progress-xs margin-vertical-10 ">
                                            <div class="progress-bar progress-bar-primary" style="width: 85%"></div>
                                        </div>
                                    </td>
                                    <td>Apr 2, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i
                                                    class="fas fa-pencil-alt text-inverse m-r-10"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i
                                                    class="fas fa-times text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tantas earum numeris</td>
                                    <td>
                                        <div class="progress progress-xs margin-vertical-10 ">
                                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                        </div>
                                    </td>
                                    <td>July 11, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i
                                                    class="fas fa-pencil-alt text-inverse m-r-10"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i
                                                    class="fas fa-times text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Contextual classes</h4>
                        <h6 class="card-subtitle">You may use text or background utilities to achieve similar
                            styles.</h6>
                        <div class="table-responsive mt-3">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Heading</th>
                                    <th scope="col">Heading</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="bg-primary">
                                    <th scope="row">1</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>

                                <tr class="bg-success">
                                    <th scope="row">3</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>

                                <tr class="bg-info">
                                    <th scope="row">5</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>

                                <tr class="bg-warning">
                                    <th scope="row">7</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>

                                <tr class="bg-danger">
                                    <th scope="row">9</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection
@push('js')
@endpush


