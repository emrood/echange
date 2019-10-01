@extends('backend.layouts.app')

@section('title') {{ 'Dashboard 6 | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
@include('backend.layouts.partials.breadcrumbs',['current' => 'Dashboard 6'])
@endsection

@push('before-css')
@endpush

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
            <!-- column -->
            <div class="col-md-12 col-lg-9">
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
                        <div class="mt-5" style="height: 220px;">
                            <canvas id="bar-chart" width="400" height="150"></canvas>
                        </div>
                        <ul class="list-inline text-center mt-4 mb-0">
                            <li class="list-inline-item text-dark"><i class="fas fa-circle font-10 mr-2 text-info"></i>Washington</li>
                            <li class="list-inline-item text-dark"><i class="fas fa-circle font-10 mr-2 text-purple"></i>New
                                York</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="card bg-gradient-primary">
                    <div class="card-body">
                        <h4 class="card-title text-white">Thursday <span class="font-14 font-normal op-5">12th
                                        April, 2018</span></h4>
                        <div class="d-flex align-items-center mt-3">
                            <h1 class="text-white font-light">
                                <i class="wi wi-day-sleet"></i>
                                <span>35<sup>°</sup></span>
                            </h1>
                        </div>
                    </div>
                    <div style="height: 80px;">
                        <canvas id="weather" height="120"></canvas>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Campaign</h4>
                        <h3>$769.08</h3>
                        <div style="height: 50px;">
                            <canvas id="campaign" height="120"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Product Sales & Blog -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Sales -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card sales-details">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex p-3">
                                    <div>
                                        <i class="text-purple" data-feather="shield"></i>
                                        <span class="d-block mt-3">Profit</span>
                                        <h3 class="mb-0">5,600</h3>
                                    </div>
                                    <div class="ml-auto align-self-end mb-1">
                                                <span><i class="fas fa-caret-up mr-1"></i>
                                                    2.41</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex p-3">
                                    <div>
                                        <i class="text-primary" data-feather="user-plus"></i>
                                        <span class="d-block mt-3">New Customers</span>
                                        <h3 class="mb-0">180</h3>
                                    </div>
                                    <div class="ml-auto align-self-end mb-1">
                                                <span><i class="fas fa-caret-down mr-1"></i>
                                                    2.41</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex p-3">
                                    <div>
                                        <i class="text-info" data-feather="cloud"></i>
                                        <span class="d-block mt-3">Profit</span>
                                        <h3 class="mb-0">5,600</h3>
                                    </div>
                                    <div class="ml-auto align-self-end mb-1">
                                                <span><i class="fas fa-caret-up mr-1"></i>
                                                    2.41</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex p-3">
                                    <div>
                                        <i class="text-warning" data-feather="briefcase"></i>
                                        <span class="d-block mt-3">New Customers</span>
                                        <h3 class="mb-0">180</h3>
                                    </div>
                                    <div class="ml-auto align-self-end mb-1">
                                                <span><i class="fas fa-caret-down mr-1"></i>
                                                    2.41</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Sales -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Earnings</h4>
                        <h6 class="card-subtitle mb-0">Sales for this month</h6>
                        <h2 class="mt-4 mb-1">$43,567.53</h2>
                        <span>6.5% ($829.35)</span>
                        <div class="mt-3" style="height: 84px;">
                            <canvas id="earnings" height="120"></canvas>
                        </div>
                        <hr class="my-4">
                        <span>Last Month Earnings</span>
                        <h3 class="font-21 font-normal mt-1">$36,826.87</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="card-title">Product Sales</h4>
                                <h6 class="card-subtitle mb-0">Risus commodo viverra maecenas accumsan lacus
                                    vel
                                    facilisis. </h6>
                            </div>
                            <div class="ml-auto">
                                <div class="dropdown title-dropdown">
                                    <button class="btn btn-link text-muted dropdown-toggle" type="button" id="dd1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-feather="more-horizontal"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="pro-sales ct-charts mt-4"></div>
                            </div>
                            <div class="col-md-4">
                                <ul class="list-unstyled mt-4">
                                    <li class="d-flex align-items-start pb-4 border-bottom">
                                        <i class="fas fa-circle text-purple font-12 mr-2 mt-2"></i>
                                        <div>
                                            <h3 class="mb-0">3,567</h3>
                                            <span class="d-block">Sales of product A</span>
                                            <span class="text-purple font-medium">-65.88% <span class="text-dark">Down</span></span>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start mt-4">
                                        <i class="fas fa-circle text-primary font-12 mr-2 mt-2"></i>
                                        <div>
                                            <h3 class="mb-0">1,836</h3>
                                            <span class="d-block">Sales of product B</span>
                                            <span class="text-primary font-medium">+25.88% <span class="text-dark">Up</span></span>
                                        </div>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-rounded bg-gradient-primary text-white text-uppercase mt-2">Review</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="card-title">Top 10 Best Performers</h4>
                                <h6 class="card-subtitle mb-0">Risus commodo viverra maecenas accumsan lacus
                                    vel
                                    facilisis. </h6>
                            </div>
                            <div class="ml-auto">
                                <div class="dropdown title-dropdown">
                                    <button class="btn btn-link text-muted dropdown-toggle" type="button" id="dd2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-feather="more-horizontal"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd2">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-flex align-items-center">
                            <div class="custom-input icon-left w-100 w-md-25 mr-3 mt-3">
                                <input type="text" class="form-control" placeholder="Search...">
                                <i class="form-control-icon" data-feather="search"></i>
                            </div>
                            <div class="custom-input icon-left w-100 w-md-25 mt-3">
                                <select class="custom-select form-control">
                                    <option selected>Select One</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <i class="form-control-icon" data-feather="filter"></i>
                            </div>
                            <div class="custom-input ml-auto w-100 w-md-25 mt-3">
                                <input type="text" class="form-control datepicker" placeholder="Select date">
                                <i class="form-control-icon" data-feather="calendar"></i>
                            </div>
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table no-wrap v-middle">
                                <thead>
                                <tr>
                                    <th class="border-0 text-muted">Name</th>
                                    <th class="border-0 text-muted">Products</th>
                                    <th class="border-0 text-muted">Status</th>
                                    <th class="border-0 text-muted">Branch</th>
                                    <th class="border-0 text-muted">Sales</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/600x600?text=user" alt="user" class="rounded-circle"
                                                 width="40" />
                                            <div class="ml-2">
                                                <span class="text-dark">Mark Freeman</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="popover-product">
                                                        <span class="popover-item">
                                                            <img src="https://via.placeholder.com/71x40?text=product" alt="product" />
                                                        </span>
                                            <span class="popover-item item-2">
                                                            <img src="https://via.placeholder.com/71x40?text=product" alt="product" />
                                                        </span>
                                            <span class="popover-item item-3">
                                                            <img src="https://via.placeholder.com/71x40?text=product" alt="product" />
                                                        </span>
                                            <a class="more-product" href="#"><span class="badge badge-pill badge-light font-12">+3
                                                                More</span></a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-success font-medium font-14 text-white">Paid</span>
                                    </td>
                                    <td class="text-dark">Rockford, Illinois</td>
                                    <td class="text-dark">180</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/600x600?text=user" alt="user" class="rounded-circle"
                                                 width="40" />
                                            <div class="ml-2">
                                                <span class="text-dark">Mark Freeman</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="popover-product">
                                                        <span class="popover-item">
                                                            <img src="https://via.placeholder.com/71x40?text=product" alt="product" />
                                                        </span>
                                            <span class="popover-item item-2">
                                                            <img src="https://via.placeholder.com/71x40?text=product" alt="product" />
                                                        </span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-warning font-medium font-14 text-white">Overdue</span>
                                    </td>
                                    <td class="text-dark">Rockford, Illinois</td>
                                    <td class="text-dark">180</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/600x600?text=user" alt="user" class="rounded-circle"
                                                 width="40" />
                                            <div class="ml-2">
                                                <span class="text-dark">Mark Freeman</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="popover-product">
                                                        <span class="popover-item">
                                                            <img src="https://via.placeholder.com/71x40?text=product" alt="product" />
                                                        </span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-success font-medium font-14 text-white">Paid</span>
                                    </td>
                                    <td class="text-dark">Rockford, Illinois</td>
                                    <td class="text-dark">180</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/600x600?text=user" alt="user" class="rounded-circle"
                                                 width="40" />
                                            <div class="ml-2">
                                                <span class="text-dark">Mark Freeman</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="popover-product">
                                                        <span class="popover-item">
                                                            <img src="https://via.placeholder.com/71x40?text=product" alt="product" />
                                                        </span>
                                            <span class="popover-item item-2">
                                                            <img src="https://via.placeholder.com/71x40?text=product" alt="product" />
                                                        </span>
                                            <span class="popover-item item-3">
                                                            <img src="https://via.placeholder.com/71x40?text=product" alt="product" />
                                                        </span>
                                            <a class="more-product" href="#"><span class="badge badge-pill badge-light font-12">+5
                                                                More</span></a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-success font-medium font-14 text-white">Paid</span>
                                    </td>
                                    <td class="text-dark">Rockford, Illinois</td>
                                    <td class="text-dark">180</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/600x600?text=user" alt="user" class="rounded-circle"
                                                 width="40" />
                                            <div class="ml-2">
                                                <span class="text-dark">Mark Freeman</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="popover-product">
                                                        <span class="popover-item">
                                                            <img src="https://via.placeholder.com/71x40?text=product" alt="product" />
                                                        </span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-warning font-medium font-14 text-white">Overdue</span>
                                    </td>
                                    <td class="text-dark">Rockford, Illinois</td>
                                    <td class="text-dark">180</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/600x600?text=user" alt="user" class="rounded-circle"
                                                 width="40" />
                                            <div class="ml-2">
                                                <span class="text-dark">Mark Freeman</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="popover-product">
                                                        <span class="popover-item">
                                                            <img src="https://via.placeholder.com/71x40?text=product" alt="product" />
                                                        </span>
                                            <span class="popover-item item-2">
                                                            <img src="https://via.placeholder.com/71x40?text=product" alt="product" />
                                                        </span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-success font-medium font-14 text-white">Paid</span>
                                    </td>
                                    <td class="text-dark">Rockford, Illinois</td>
                                    <td class="text-dark">180</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection
        
@push('js')
    <!--Custom JavaScript -->
    <script src="{{asset('dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <script src="{{asset('assets/libs/chart.js/dist/Chart.min.js')}}"></script>
    <!--chartis chart-->
    <script src="{{asset('assets/libs/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('dist/js/pages/dashboards/dashboard6.js')}}"></script>
    <script>
        $('.datepicker').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    </script>
@endpush        
