@extends('backend.layouts.app')

@section('title') {{ 'Dashboard 3 | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Dashboard 3'])
@endsection

@push('after-css')
@endpush

@section('content')

    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Product Sales & Blog -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-block d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Product Sales</h4>
                                <h6 class="card-subtitle mb-0">Risus commodo viverra maecenas accumsan lacus
                                    vel
                                    facilisis. </h6>
                            </div>
                            <div class="ml-auto">
                                <div class="custom-input mt-3 mt-md-0">
                                    <input type="text" class="form-control datepicker" placeholder="Select year">
                                    <i class="form-control-icon" data-feather="calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="sales ct-charts mt-4"></div>
                        <ul class="list-inline text-center mt-4 mb-0">
                            <li class="list-inline-item text-dark"><i class="fas fa-circle font-10 mr-2 text-info"></i>Washington</li>
                            <li class="list-inline-item text-dark"><i class="fas fa-circle font-10 mr-2 text-purple"></i>New
                                York</li>
                            <li class="list-inline-item text-dark"><i class="fas fa-circle font-10 mr-2 text-warning"></i>Nevada</li>
                            <li class="list-inline-item text-dark"><i class="fas fa-circle font-10 mr-2 text-danger"></i>Vermont</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Product Sales & Blog -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Download and Bandwidth -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card bg-gradient-info">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mr-3 align-self-center">
                                <h1 class="text-white"><i class="ti-pie-chart"></i></h1>
                            </div>
                            <div>
                                <h4 class="card-title text-white">Bandwidth Usage</h4>
                                <h6 class="card-subtitle mb-0 text-white">March 2019</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 align-self-end">
                                <h2 class="text-white">350<span class="font-18 font-normal">GB</span></h2>
                            </div>
                            <div class="col-8 p-t-10 p-b-20 align-self-center">
                                <div class="usage chartist-chart" style="height:65px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card bg-gradient-primary">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mr-3 align-self-center">
                                <h1 class="text-white"><i class="icon-cloud-download"></i></h1>
                            </div>
                            <div>
                                <h4 class="card-title text-white">Download Count</h4>
                                <h6 class="card-subtitle mb-0 text-white">March 2019</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 align-self-end">
                                <h2 class="text-white">35487</h2>
                            </div>
                            <div class="col-8 p-t-10 p-b-20 text-right">
                                <div class="spark-count" style="height:65px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Download and Bandwidth -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Product Sales</h4>
                        <h6 class="card-subtitle mb-0">Risus commodo viverra maecena</h6>
                        <div class="product-sales mt-4" style="height:280px; width:100%"></div>
                        <ul class="list-style-none">
                            <li><i class="fas fa-circle text-purple font-12 mr-2"></i> <span class="text-dark">Vermont</span>
                                <span class="text-muted ml-1">7,32,970</span></li>
                            <li class="mt-4"><i class="fas fa-circle text-info font-12 mr-2"></i> <span class="text-dark">Arizona</span>
                                <span class="text-muted ml-1">3,24,520</span></li>
                            <li class="mt-4"><i class="fas fa-circle text-success font-12 mr-2"></i> <span
                                        class="text-dark">New York</span> <span class="text-muted ml-1">7,87,210</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="row">
                    <!-- column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Top 10 Best Performers</h4>
                                        <h6 class="card-subtitle mb-0">Risus commodo viverra maecenas accumsan
                                            lacus
                                            vel facilisis. </h6>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="dropdown title-dropdown">
                                            <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                                    id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="custom-input icon-left w-50 mr-3 mt-3">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                    <div class="custom-input ml-auto w-50 mt-3">
                                        <input type="text" class="form-control datepicker" placeholder="Select date">
                                        <i class="form-control-icon" data-feather="calendar"></i>
                                    </div>
                                </div>
                                <div class="table-responsive mt-3">
                                    <table class="table no-wrap v-middle">
                                        <thead>
                                        <tr>
                                            <th class="border-0 text-muted">Name</th>
                                            <th class="border-0 text-muted">Branch</th>
                                            <th class="border-0 text-muted">Sales</th>
                                            <th class="border-0 text-muted">Refunds</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://via.placeholder.com/600x600?text=user" alt="user"
                                                         class="rounded-circle" width="40" />
                                                    <div class="ml-2">
                                                        <span class="text-dark">Mark Freeman</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-dark">Rockford, Illinois</td>
                                            <td class="text-dark">180</td>
                                            <td class="text-dark">03</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://via.placeholder.com/600x600?text=user" alt="user"
                                                         class="rounded-circle" width="40" />
                                                    <div class="ml-2">
                                                        <span class="text-dark">Mark Freeman</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-dark">Rockford, Illinois</td>
                                            <td class="text-dark">180</td>
                                            <td class="text-dark">12</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://via.placeholder.com/600x600?text=user" alt="user"
                                                         class="rounded-circle" width="40" />
                                                    <div class="ml-2">
                                                        <span class="text-dark">Mark Freeman</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-dark">Rockford, Illinois</td>
                                            <td class="text-dark">180</td>
                                            <td class="text-dark">00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://via.placeholder.com/600x600?text=user" alt="user"
                                                         class="rounded-circle" width="40" />
                                                    <div class="ml-2">
                                                        <span class="text-dark">Mark Freeman</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-dark">Rockford, Illinois</td>
                                            <td class="text-dark">180</td>
                                            <td class="text-dark">26</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Recent comment and todo -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Comments</h4>
                        <h6 class="card-subtitle mb-0">Risus commodo viverra maecena</h6>
                    </div>
                    <div class="comment-widgets scrollable" style="height:573px;">
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row m-t-0">
                            <div class="p-2">
                                <img src="https://via.placeholder.com/52x52?text=user" alt="user" width="50" class="rounded-circle">
                            </div>
                            <div class="comment-text w-100">
                                <h6 class="font-medium">James Anderson</h6>
                                <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                <div class="comment-footer">
                                    <span class="text-muted float-right">April 14, 2016</span>
                                    <span class="label label-rounded label-primary">Pending</span>
                                    <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-check"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-heart"></i>
                                                </a>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row">
                            <div class="p-2">
                                <img src="https://via.placeholder.com/600x600?text=user" alt="user" width="50" class="rounded-circle">
                            </div>
                            <div class="comment-text active w-100">
                                <h6 class="font-medium">Michael Jorden</h6>
                                <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                <div class="comment-footer ">
                                    <span class="text-muted float-right">April 14, 2016</span>
                                    <span class="label label-success label-rounded">Approved</span>
                                    <span class="action-icons active">
                                                <a href="javascript:void(0)">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="icon-close"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-heart text-danger"></i>
                                                </a>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row">
                            <div class="p-2">
                                <img src="https://via.placeholder.com/600x600?text=user" alt="user" width="50" class="rounded-circle">
                            </div>
                            <div class="comment-text w-100">
                                <h6 class="font-medium">Johnathan Doeting</h6>
                                <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                <div class="comment-footer">
                                    <span class="text-muted float-right">April 14, 2016</span>
                                    <span class="label label-rounded label-danger">Rejected</span>
                                    <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-check"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-heart"></i>
                                                </a>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row m-t-0">
                            <div class="p-2">
                                <img src="https://via.placeholder.com/600x600?text=user" alt="user" width="50" class="rounded-circle">
                            </div>
                            <div class="comment-text w-100">
                                <h6 class="font-medium">Steve Jobs</h6>
                                <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                <div class="comment-footer">
                                    <span class="text-muted float-right">April 14, 2016</span>
                                    <span class="label label-rounded label-primary">Pending</span>
                                    <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-check"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-heart"></i>
                                                </a>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row comment-row">
                            <div class="p-2">
                                <img src="https://via.placeholder.com/600x600?text=user" alt="user" width="50" class="rounded-circle">
                            </div>
                            <div class="comment-text active w-100">
                                <h6 class="font-medium">Michael Jorden</h6>
                                <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                <div class="comment-footer ">
                                    <span class="text-muted float-right">April 14, 2016</span>
                                    <span class="label label-success label-rounded">Approved</span>
                                    <span class="action-icons active">
                                                <a href="javascript:void(0)">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="icon-close"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-heart text-danger"></i>
                                                </a>
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Chats</h4>
                        <h6 class="card-subtitle mb-0">Risus commodo viverra maecena</h6>
                        <div class="chat-box scrollable position-relative mt-3" style="height:475px;">
                            <!--chat Row -->
                            <ul class="chat-list">
                                <!--chat Row -->
                                <li class="chat-item">
                                    <div class="chat-img"><img src="https://via.placeholder.com/52x52?text=user" alt="user"></div>
                                    <div class="chat-content">
                                        <h6 class="font-medium">James Anderson</h6>
                                        <div class="box">Lorem Ipsum is simply dummy text of the printing &amp;
                                            type setting industry.</div>
                                    </div>
                                    <div class="chat-time">10:56 am</div>
                                </li>
                                <!--chat Row -->
                                <li class="chat-item">
                                    <div class="chat-img"><img src="https://via.placeholder.com/600x600?text=user" alt="user"></div>
                                    <div class="chat-content">
                                        <h6 class="font-medium">Bianca Doe</h6>
                                        <div class="box">It’s Great opportunity to work.</div>
                                    </div>
                                    <div class="chat-time">10:57 am</div>
                                </li>
                                <!--chat Row -->
                                <li class="odd chat-item">
                                    <div class="chat-content">
                                        <div class="box">I would love to join the team.</div>
                                        <br>
                                    </div>
                                </li>
                                <!--chat Row -->
                                <li class="odd chat-item">
                                    <div class="chat-content">
                                        <div class="box">Whats budget of the new project.</div>
                                        <br>
                                    </div>
                                    <div class="chat-time">10:59 am</div>
                                </li>
                                <!--chat Row -->
                                <li class="chat-item">
                                    <div class="chat-img"><img src="https://via.placeholder.com/52x52?text=user" alt="user"></div>
                                    <div class="chat-content">
                                        <h6 class="font-medium">Angelina Rhodes</h6>
                                        <div class="box">Well we have good budget for the project</div>
                                    </div>
                                    <div class="chat-time">11:00 am</div>
                                </li>
                                <!--chat Row -->
                                <!-- <div id="someDiv"></div> -->
                            </ul>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <div class="row">
                            <div class="col-9">
                                <div class="input-field mt-0 mb-0">
                                    <input type="text" id="textarea1" placeholder="Type and enter" class="form-control border-0">
                                </div>
                            </div>
                            <div class="col-3">
                                <a class="btn-circle btn-lg btn-cyan float-right text-white" href="javascript:void(0)"><i
                                            class="fas fa-paper-plane"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
@endsection
@push('js')
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{asset('assets/libs/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!--c3 charts -->
    <script src="{{asset('assets/extra-libs/c3/d3.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/c3/c3.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('dist/js/pages/dashboards/dashboard3.js')}}"></script>
    <script>
        $('.datepicker').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    </script>
@endpush
