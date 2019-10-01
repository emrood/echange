@extends('backend.layouts.app')

@section('title') {{ 'Dashboard 5 | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Dashboard 5'])
@endsection

@push('before-css')
@endpush

@push('after-css')
@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales -->
        <!-- ============================================================== -->
        <div class="row crypto-sales">
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="cc BTC text-warning"></i>
                            <div class="ml-2">
                                <span class="text-dark font-medium">BTC<span class="font-normal">&nbsp;/&nbsp;</span>Bitcoin</span>
                            </div>
                        </div>
                        <div class="custom-input mt-2 mb-3">
                            <select class="custom-select form-control">
                                <option>Select One</option>
                                <option value="1" selected>7 Days</option>
                                <option value="2">15 Days</option>
                                <option value="3">30 Days</option>
                            </select>
                        </div>
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0">$3,640.65</h3>
                            <div class="ml-auto">
                                <span class="text-danger"><i class="fas fa-caret-down mr-1"></i> -0.70%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="cc ETH text-info"></i>
                            <div class="ml-2">
                                <span class="text-dark font-medium">ETH<span class="font-normal">&nbsp;/&nbsp;</span>Ethereum</span>
                            </div>
                        </div>
                        <div class="custom-input mt-2 mb-3">
                            <select class="custom-select form-control">
                                <option>Select One</option>
                                <option value="1" selected>7 Days</option>
                                <option value="2">15 Days</option>
                                <option value="3">30 Days</option>
                            </select>
                        </div>
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0">$123.50</h3>
                            <div class="ml-auto">
                                <span class="text-success"><i class="fas fa-caret-up mr-1"></i> 3.57%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="cc XRP text-purple"></i>
                            <div class="ml-2">
                                <span class="text-dark font-medium">XRP<span class="font-normal">&nbsp;/&nbsp;</span>Ripple</span>
                            </div>
                        </div>
                        <div class="custom-input mt-2 mb-3">
                            <select class="custom-select form-control">
                                <option>Select One</option>
                                <option value="1" selected>7 Days</option>
                                <option value="2">15 Days</option>
                                <option value="3">30 Days</option>
                            </select>
                        </div>
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0">$0.303093</h3>
                            <div class="ml-auto">
                                <span class="text-danger"><i class="fas fa-caret-down mr-1"></i> -2.33%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="cc LTC text-danger"></i>
                            <div class="ml-2">
                                <span class="text-dark font-medium">LTC<span class="font-normal">&nbsp;/&nbsp;</span>Litecoin</span>
                            </div>
                        </div>
                        <div class="custom-input mt-2 mb-3">
                            <select class="custom-select form-control">
                                <option>Select One</option>
                                <option value="1" selected>7 Days</option>
                                <option value="2">15 Days</option>
                                <option value="3">30 Days</option>
                            </select>
                        </div>
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0">$43.90</h3>
                            <div class="ml-auto">
                                <span class="text-danger"><i class="fas fa-caret-down mr-1"></i> -0.86%</span>
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
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="card-title">Bitcoin / Ethereum / Ripple</h4>
                                <h6 class="card-subtitle mb-0">Overview of Latest Month</h6>
                            </div>
                            <div class="ml-auto d-flex align-items-center">
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
                        <div class="d-block d-md-flex align-items-center pb-4 border-bottom">
                            <div class="custom-input icon-left mt-3 w-100 w-md-25 mr-3">
                                <input type="text" class="form-control" placeholder="Search...">
                                <i class="form-control-icon" data-feather="search"></i>
                            </div>
                            <div class="custom-input icon-left mt-3 w-100 w-md-25">
                                <select class="custom-select form-control">
                                    <option selected>Select One</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <i class="form-control-icon" data-feather="filter"></i>
                            </div>
                            <div class="custom-input ml-auto mt-3 w-100 w-md-25">
                                <input type="text" class="form-control datepicker" placeholder="Select date">
                                <i class="form-control-icon" data-feather="calendar"></i>
                            </div>
                        </div>
                        <div class="mt-4" style="height: 250px;">
                            <canvas id="crypto-chart" height="120"></canvas>
                        </div>
                        <ul class="list-inline text-center mt-4 mb-0">
                            <li class="list-inline-item text-dark"><i class="fas fa-circle font-10 mr-2 text-info"></i>Bitcoin
                            </li>
                            <li class="list-inline-item text-dark"><i
                                        class="fas fa-circle font-10 mr-2 text-purple"></i>Ethereum
                            </li>
                            <li class="list-inline-item text-dark"><i
                                        class="fas fa-circle font-10 mr-2 text-warning"></i>Ripple
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- place order / Exchange -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-sm-12 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="card-title">Place your Order</h4>
                                <h6 class="card-subtitle mb-0">Buy and Sell Crypto as you Like</h6>
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
                        <div class="d-flex align-items-center mt-4 pb-4 border-bottom">
                            <div class="custom-input icon-left w-50">
                                <select class="custom-select form-control">
                                    <option>Select One</option>
                                    <option selected value="1">Bitcoin</option>
                                    <option value="2">Ethereum</option>
                                    <option value="3">Ripple</option>
                                </select>
                                <i class="form-control-icon" data-feather="filter"></i>
                            </div>
                            <div class="ml-auto">
                                <ul class="nav nav-pills custom-pills success-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab1" data-toggle="pill" href="#test4"
                                           role="tab" aria-selected="true">Buy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab1" data-toggle="pill" href="#test5"
                                           role="tab" aria-selected="false">Sell</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content mt-4" id="pills-tabContent1">
                            <div class="tab-pane fade show active" id="test4" role="tabpanel"
                                 aria-labelledby="pills-home-tab1">
                                <form class="rounded-input pt-2">
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="cc BTC font-14"></i></span>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-rounded btn-success text-white">Buy
                                            Bitcoin
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="test5" role="tabpanel" aria-labelledby="pills-profile-tab1">
                                <form class="rounded-input pt-2">
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="cc BTC font-14"></i></span>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-rounded btn-danger text-white">Sell
                                            Bitcoin
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
            <!-- column -->
            <div class="col-sm-12 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center pb-4 border-bottom">
                            <div>
                                <h4 class="card-title">Currency Exchange</h4>
                                <h6 class="card-subtitle mb-0">exchange currency from here</h6>
                            </div>
                            <div class="ml-auto">
                                <div class="dropdown title-dropdown">
                                    <button class="btn btn-link text-muted dropdown-toggle" type="button" id="dd3"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-feather="more-horizontal"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd3">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="rounded-input mt-4">
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" value="1.02458">
                                    <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <select class="custom-select custom-select-lg">
                                                        <option value="1">BTC</option>
                                                        <option value="2">ETH</option>
                                                        <option value="3">DASH</option>
                                                        <option value="4">LTC</option>
                                                        <option value="5">NEO</option>
                                                        <option value="6">XRP</option>
                                                        <option value="7">EOS</option>
                                                        <option value="8">NEM</option>
                                                        <option value="9">ADA</option>
                                                    </select>
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mb-3">
                                <div class="round align-self-center bg-light text-muted"><i
                                            data-feather="refresh-cw"></i></div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" value="3,757.87">
                                    <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <select class="custom-select custom-select-lg">
                                                        <option value="1">USD</option>
                                                        <option value="2">EUR</option>
                                                        <option value="3">INR</option>
                                                        <option value="4">AUD</option>
                                                        <option value="5">GBP</option>
                                                        <option value="6">CAD</option>
                                                    </select>
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-rounded bg-gradient-primary text-white">Exchange
                                    Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- column -->
        </div>
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="card-title">Cryptocurrencies</h4>
                                <h6 class="card-subtitle mb-0">Top 100 cryptocurrencies by market
                                    capitalization</h6>
                            </div>
                            <div class="ml-auto">
                                <div class="dropdown title-dropdown">
                                    <button class="btn btn-link text-muted dropdown-toggle" type="button" id="dd4"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-feather="more-horizontal"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd4">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-flex align-items-center">
                            <div class="custom-input mr-auto icon-left w-100 w-md-25 mt-3">
                                <input type="text" class="form-control" placeholder="Search...">
                                <i class="form-control-icon" data-feather="search"></i>
                            </div>
                            <div class="custom-input w-100 w-md-auto mt-3 pr-0 pr-md-3 border-right">
                                <select class="custom-select form-control">
                                    <option>Select One</option>
                                    <option selected value="1">USD</option>
                                    <option value="2">INR</option>
                                    <option value="3">AUD</option>
                                </select>
                            </div>
                            <div class="custom-input w-100 w-md-auto mt-3 pl-0 pl-md-3">
                                <div class="d-flex align-items-center">
                                    <span class="text-dark mr-2">Show</span>
                                    <select class="custom-select form-control">
                                        <option selected value="1">10</option>
                                        <option value="2">25</option>
                                        <option value="3">50</option>
                                        <option value="4">100</option>
                                    </select>
                                    <span class="text-dark ml-2">entries</span>
                                </div>
                            </div>
                        </div>
                        <div class="crypto-table table-responsive mt-3">
                            <table class="table v-middle">
                                <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Market Cap</th>
                                    <th class="border-top-0">Price</th>
                                    <th class="border-top-0">Volume(24h)</th>
                                    <th class="border-top-0">Circulating Supply</th>
                                    <th class="border-top-0">Change</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                        <span><a href="JavaScript: void(0);"><i class="display-7 cc XRP"
                                                                                                title="XRP"></i></a></span>
                                            <h6 class="mb-0 ml-2"><a class="font-medium text-dark"
                                                                     href="JavaScript: void(0);">
                                                    Ripple</a></h6>
                                        </div>
                                    </td>
                                    <td class="text-dark">$61,191,183,730</td>
                                    <td class="text-dark font-medium">$3,758.49</td>
                                    <td class="text-dark">$10,133,400,000</td>
                                    <td class="text-dark">17,544,462 BTC</td>
                                    <td class="text-success font-medium">3.14%</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                        <span><a href="JavaScript: void(0);"><i class="display-7 cc XRP"
                                                                                                title="XRP"></i></a></span>
                                            <h6 class="mb-0 ml-2"><a class="font-medium text-dark"
                                                                     href="JavaScript: void(0);">
                                                    Ripple</a></h6>
                                        </div>
                                    </td>
                                    <td class="text-dark">$61,191,183,730</td>
                                    <td class="text-dark font-medium">$3,758.49</td>
                                    <td class="text-dark">$10,133,400,000</td>
                                    <td class="text-dark">17,544,462 BTC</td>
                                    <td class="text-success font-medium">3.14%</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                        <span><a href="JavaScript: void(0);"><i class="display-7 cc XRP"
                                                                                                title="XRP"></i></a></span>
                                            <h6 class="mb-0 ml-2"><a class="font-medium text-dark"
                                                                     href="JavaScript: void(0);">
                                                    Ripple</a></h6>
                                        </div>
                                    </td>
                                    <td class="text-dark">$61,191,183,730</td>
                                    <td class="text-dark font-medium">$3,758.49</td>
                                    <td class="text-dark">$10,133,400,000</td>
                                    <td class="text-dark">17,544,462 BTC</td>
                                    <td class="text-success font-medium">3.14%</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                        <span><a href="JavaScript: void(0);"><i class="display-7 cc XRP"
                                                                                                title="XRP"></i></a></span>
                                            <h6 class="mb-0 ml-2"><a class="font-medium text-dark"
                                                                     href="JavaScript: void(0);">
                                                    Ripple</a></h6>
                                        </div>
                                    </td>
                                    <td class="text-dark">$61,191,183,730</td>
                                    <td class="text-dark font-medium">$3,758.49</td>
                                    <td class="text-dark">$10,133,400,000</td>
                                    <td class="text-dark">17,544,462 BTC</td>
                                    <td class="text-success font-medium">3.14%</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                        <span><a href="JavaScript: void(0);"><i class="display-7 cc XRP"
                                                                                                title="XRP"></i></a></span>
                                            <h6 class="mb-0 ml-2"><a class="font-medium text-dark"
                                                                     href="JavaScript: void(0);">
                                                    Ripple</a></h6>
                                        </div>
                                    </td>
                                    <td class="text-dark">$61,191,183,730</td>
                                    <td class="text-dark font-medium">$3,758.49</td>
                                    <td class="text-dark">$10,133,400,000</td>
                                    <td class="text-dark">17,544,462 BTC</td>
                                    <td class="text-success font-medium">3.14%</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                        <span><a href="JavaScript: void(0);"><i class="display-7 cc XRP"
                                                                                                title="XRP"></i></a></span>
                                            <h6 class="mb-0 ml-2"><a class="font-medium text-dark"
                                                                     href="JavaScript: void(0);">
                                                    Ripple</a></h6>
                                        </div>
                                    </td>
                                    <td class="text-dark">$61,191,183,730</td>
                                    <td class="text-dark font-medium">$3,758.49</td>
                                    <td class="text-dark">$10,133,400,000</td>
                                    <td class="text-dark">17,544,462 BTC</td>
                                    <td class="text-success font-medium">3.14%</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="d-flex align-items-center">
                                        <span>Showing <span class="text-dark">1</span> to <span
                                                    class="text-dark">10</span>
                                            of <span class="text-dark">28</span> entries</span>
                                <div class="ml-auto">
                                    <ul class="pagination mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                            </a>
                                        </li>
                                    </ul>
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
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection
@push('js')
    <!--This page JavaScript -->
    <script src="{{asset('assets/libs/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('dist/js/pages/dashboards/dashboard5.js')}}"></script>
    <script>
        $('.datepicker').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    </script>
@endpush
