@extends('backend.layouts.app')
@section('title') {{ 'Tableau de bord | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Tableau de bord'])
@endsection

@push('after-css')
@endpush

@php
    ini_set('memory_limit', '3096M');
    $currencies = \App\Currency::all();
    $evolution = array();
    foreach ($currencies->where('is_reference', false) as $currency){
        $evolution[$currency->id] = 0;
        $last_two_histories = \App\RateHistory::where('currency_id', $currency->id)->orderBy('created_at', 'desc')->skip(0)->take(2)->get();

        if(!is_null($last_two_histories)){
            if(count($last_two_histories) > 1){
                $evolution[$currency->id] = $last_two_histories->get(0)->sale_rate - $last_two_histories->get(1)->sale_rate;
            }
        }
    }

@endphp
@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-gradient-primary sales-details">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex p-3">
                                    <div>
                                        {{--<i class="text-white op-7" data-feather="shield"></i>--}}
                                        <span class="text-white op-7 d-block my-3">USD</span>
                                        <h3 class="text-white mb-0">94,5</h3>
                                    </div>
                                    <div class="ml-auto align-self-end mb-1">
                                                <span class="text-white"><i class="fas fa-caret-up text-white mr-1"></i>
                                                    1</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex p-3">
                                    <div>
                                        {{--<i class="text-white op-7" data-feather="user-plus"></i>--}}
                                        <span class="text-white op-7 d-block my-3">Euro</span>
                                        <h3 class="text-white mb-0">98</h3>
                                    </div>
                                    <div class="ml-auto align-self-end mb-1">
                                                <span class="text-white"><i
                                                            class="fas fa-caret-down text-white mr-1"></i>
                                                    2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex p-3">
                                    <div>
                                        {{--<i class="text-white op-7" data-feather="cloud"></i>--}}
                                        <span class="text-white op-7 d-block my-3">PESO</span>
                                        <h3 class="text-white mb-0">1,85</h3>
                                    </div>
                                    <div class="ml-auto align-self-end mb-1">
                                                <span class="text-white"><i class="fas fa-caret-up text-white mr-1"></i>
                                                    0.50</span>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="col-lg-3 col-md-6">--}}
                                {{--<div class="d-flex p-3">--}}
                                    {{--<div>--}}
                                        {{--<i class="text-white op-7" data-feather="briefcase"></i>--}}
                                        {{--<span class="text-white op-7 d-block my-3">New Customers</span>--}}
                                        {{--<h3 class="text-white mb-0">180</h3>--}}
                                    {{--</div>--}}
                                    {{--<div class="ml-auto align-self-end mb-1">--}}
                                                {{--<span class="text-white"><i--}}
                                                            {{--class="fas fa-caret-down text-white mr-1"></i>--}}
                                                    {{--2.41</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- ============================================================== -->
        <!-- Sales -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Product Sales & Blog -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="card-title">Evolution du taux de change</h4>
                                {{--<h6 class="card-subtitle mb-0">Risus commodo viverra maecenas accumsan lacus--}}
                                    {{--vel--}}
                                    {{--facilisis. </h6>--}}
                            </div>
                            <div class="ml-auto">
                                <div class="dropdown title-dropdown">
                                    <button class="btn btn-link text-muted dropdown-toggle" type="button" id="dd1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-feather="more-horizontal"></i>
                                    </button>
                                    {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">--}}
                                        {{--<a class="dropdown-item" href="#">Edit</a>--}}
                                        {{--<a class="dropdown-item" href="#">Delete</a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="custom-input w-50 mt-3">
                            <input type="text" class="form-control datepicker" placeholder="Select date">
                            <i class="form-control-icon" data-feather="calendar"></i>
                        </div>
                        <div class="sales ct-charts mt-4"></div>
                        <ul class="list-inline text-center mt-4 mb-0">
                            <li class="list-inline-item text-dark"><i class="fas fa-circle font-10 mr-2 text-info"></i>USD
                            </li>
                            <li class="list-inline-item text-dark"><i
                                        class="fas fa-circle font-10 mr-2 text-purple"></i>EURO
                            </li>
                            <li class="list-inline-item text-dark"><i
                                        class="fas fa-circle font-10 mr-2 text-warning"></i>PESO
                            </li>
                            {{--<li class="list-inline-item text-dark"><i--}}
                                        {{--class="fas fa-circle font-10 mr-2 text-danger"></i>Vermont--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="card-title">Chart de transaction</h4>
                                {{--<h6 class="card-subtitle mb-0">Risus commodo viverra maecenas accumsan lacus--}}
                                    {{--vel--}}
                                    {{--facilisis. </h6>--}}
                            </div>
                            <div class="ml-auto">
                                <div class="dropdown title-dropdown">
                                    {{--<button class="btn btn-link text-muted dropdown-toggle" type="button" id="dd2"--}}
                                            {{--data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                        {{--<i data-feather="more-horizontal"></i>--}}
                                    {{--</button>--}}
                                    {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd2">--}}
                                        {{--<a class="dropdown-item" href="#">Edit</a>--}}
                                        {{--<a class="dropdown-item" href="#">Delete</a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="custom-input w-50 mt-3">
                            <input type="text" class="form-control datepicker" placeholder="Select date">
                            <i class="form-control-icon" data-feather="calendar"></i>
                        </div>
                        <div class="row align-items-center">
                            <!-- column -->
                            <div class="col-md-7">
                                <div id="campaign" class="mt-4" style="height:363px; width:100%;"></div>
                            </div>
                            <!-- column -->
                            <div class="col-md-5 ml-auto">
                                <ul class="list-style-none">
                                    <li><i class="fas fa-circle text-danger font-12 mr-2"></i> <span class="text-dark">USD</span>
                                        <span class="text-muted ml-1">*</span></li>
                                    <li class="mt-4"><i class="fas fa-circle text-primary font-12 mr-2"></i>
                                        <span class="text-dark">EURO</span> <span
                                                class="text-muted ml-1">*</span></li>
                                    <li class="mt-4"><i class="fas fa-circle text-purple font-12 mr-2"></i>
                                        <span class="text-dark">PESO</span> <span
                                                class="text-muted ml-1">*</span></li>
                                    {{--<li class="mt-4"><i class="fas fa-circle text-info font-12 mr-2"></i> <span--}}
                                                {{--class="text-dark">Washington</span>--}}
                                        {{--<span class="text-muted ml-1">2,27,631</span></li>--}}
                                    {{--<li class="mt-4"><i class="fas fa-circle text-success font-12 mr-2"></i>--}}
                                        {{--<span class="text-dark">Illinois</span> <span--}}
                                                {{--class="text-muted ml-1">5,74,351</span></li>--}}
                                    {{--<li class="mt-4"><i class="fas fa-circle text-warning font-12 mr-2"></i>--}}
                                        {{--<span class="text-dark">Nevada</span> <span--}}
                                                {{--class="text-muted ml-1">6,98,176</span></li>--}}
                                </ul>
                            </div>
                            <!-- column -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- ============================================================== -->
        <!-- Product Sales & Blog -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- TODO & Sales -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- TODO & Sales -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
    {{--<div class="row">--}}
    {{--<!-- column -->--}}
    {{--<div class="col-md-12">--}}
    {{--<div class="card">--}}
    {{--<div class="card-body">--}}
    {{--<div class="d-flex align-items-center">--}}
    {{--<div>--}}
    {{--<h4 class="card-title">Top 10 Best Performers</h4>--}}
    {{--<h6 class="card-subtitle mb-0">Risus commodo viverra maecenas accumsan lacus--}}
    {{--vel--}}
    {{--facilisis. </h6>--}}
    {{--</div>--}}
    {{--<div class="ml-auto">--}}
    {{--<div class="dropdown title-dropdown">--}}
    {{--<button class="btn btn-link text-muted dropdown-toggle" type="button" id="dd3"--}}
    {{--data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
    {{--<i data-feather="more-horizontal"></i>--}}
    {{--</button>--}}
    {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd3">--}}
    {{--<a class="dropdown-item" href="#">Edit</a>--}}
    {{--<a class="dropdown-item" href="#">Delete</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="d-block d-md-flex align-items-center">--}}
    {{--<div class="custom-input icon-left w-100 w-md-25 mr-3 mt-3">--}}
    {{--<input type="text" class="form-control" placeholder="Search...">--}}
    {{--<i class="form-control-icon" data-feather="search"></i>--}}
    {{--</div>--}}
    {{--<div class="custom-input icon-left w-100 w-md-25 mt-3">--}}
    {{--<select class="custom-select form-control">--}}
    {{--<option selected>Select One</option>--}}
    {{--<option value="1">One</option>--}}
    {{--<option value="2">Two</option>--}}
    {{--<option value="3">Three</option>--}}
    {{--</select>--}}
    {{--<i class="form-control-icon" data-feather="filter"></i>--}}
    {{--</div>--}}
    {{--<div class="custom-input ml-auto w-100 w-md-25 mt-3">--}}
    {{--<input type="text" class="form-control datepicker" placeholder="Select date">--}}
    {{--<i class="form-control-icon" data-feather="calendar"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="table-responsive mt-3">--}}
    {{--<table class="table no-wrap v-middle">--}}
    {{--<thead>--}}
    {{--<tr>--}}
    {{--<th class="border-0 text-muted">Name</th>--}}
    {{--<th class="border-0 text-muted">Products</th>--}}
    {{--<th class="border-0 text-muted">Status</th>--}}
    {{--<th class="border-0 text-muted">Branch</th>--}}
    {{--<th class="border-0 text-muted">Sales</th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
    {{--<tr>--}}
    {{--<td>--}}
    {{--<div class="d-flex align-items-center">--}}
    {{--<img src="https://via.placeholder.com/600x600?text=user" alt="user" class="rounded-circle"--}}
    {{--width="40" />--}}
    {{--<div class="ml-2">--}}
    {{--<span class="text-dark">Mark Freeman</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="popover-product">--}}
    {{--<span class="popover-item">--}}
    {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
    {{--</span>--}}
    {{--<span class="popover-item item-2">--}}
    {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
    {{--</span>--}}
    {{--<span class="popover-item item-3">--}}
    {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
    {{--</span>--}}
    {{--<a class="more-product" href="#"><span class="badge badge-pill badge-light font-12">+3--}}
    {{--More</span></a>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<span class="badge badge-pill badge-success font-medium font-14 text-white">Paid</span>--}}
    {{--</td>--}}
    {{--<td class="text-dark">Rockford, Illinois</td>--}}
    {{--<td class="text-dark">180</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
    {{--<td>--}}
    {{--<div class="d-flex align-items-center">--}}
    {{--<img src="https://via.placeholder.com/600x600?text=user" alt="user" class="rounded-circle"--}}
    {{--width="40" />--}}
    {{--<div class="ml-2">--}}
    {{--<span class="text-dark">Mark Freeman</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="popover-product">--}}
    {{--<span class="popover-item">--}}
    {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
    {{--</span>--}}
    {{--<span class="popover-item item-2">--}}
    {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<span class="badge badge-pill badge-warning font-medium font-14 text-white">Overdue</span>--}}
    {{--</td>--}}
    {{--<td class="text-dark">Rockford, Illinois</td>--}}
    {{--<td class="text-dark">180</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
    {{--<td>--}}
    {{--<div class="d-flex align-items-center">--}}
    {{--<img src="https://via.placeholder.com/600x600?text=user" alt="user" class="rounded-circle"--}}
    {{--width="40" />--}}
    {{--<div class="ml-2">--}}
    {{--<span class="text-dark">Mark Freeman</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="popover-product">--}}
    {{--<span class="popover-item">--}}
    {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<span class="badge badge-pill badge-success font-medium font-14 text-white">Paid</span>--}}
    {{--</td>--}}
    {{--<td class="text-dark">Rockford, Illinois</td>--}}
    {{--<td class="text-dark">180</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
    {{--<td>--}}
    {{--<div class="d-flex align-items-center">--}}
    {{--<img src="https://via.placeholder.com/600x600?text=user" alt="user" class="rounded-circle"--}}
    {{--width="40" />--}}
    {{--<div class="ml-2">--}}
    {{--<span class="text-dark">Mark Freeman</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="popover-product">--}}
    {{--<span class="popover-item">--}}
    {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
    {{--</span>--}}
    {{--<span class="popover-item item-2">--}}
    {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
    {{--</span>--}}
    {{--<span class="popover-item item-3">--}}
    {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
    {{--</span>--}}
    {{--<a class="more-product" href="#"><span class="badge badge-pill badge-light font-12">+5--}}
    {{--More</span></a>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<span class="badge badge-pill badge-success font-medium font-14 text-white">Paid</span>--}}
    {{--</td>--}}
    {{--<td class="text-dark">Rockford, Illinois</td>--}}
    {{--<td class="text-dark">180</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
    {{--<td>--}}
    {{--<div class="d-flex align-items-center">--}}
    {{--<img src="https://via.placeholder.com/600x600?text=user" alt="user" class="rounded-circle"--}}
    {{--width="40" />--}}
    {{--<div class="ml-2">--}}
    {{--<span class="text-dark">Mark Freeman</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="popover-product">--}}
    {{--<span class="popover-item">--}}
    {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<span class="badge badge-pill badge-warning font-medium font-14 text-white">Overdue</span>--}}
    {{--</td>--}}
    {{--<td class="text-dark">Rockford, Illinois</td>--}}
    {{--<td class="text-dark">180</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
    {{--<td>--}}
    {{--<div class="d-flex align-items-center">--}}
    {{--<img src="https://via.placeholder.com/600x600?text=user" alt="user" class="rounded-circle"--}}
    {{--width="40" />--}}
    {{--<div class="ml-2">--}}
    {{--<span class="text-dark">Mark Freeman</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="popover-product">--}}
    {{--<span class="popover-item">--}}
    {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
    {{--</span>--}}
    {{--<span class="popover-item item-2">--}}
    {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<span class="badge badge-pill badge-success font-medium font-14 text-white">Paid</span>--}}
    {{--</td>--}}
    {{--<td class="text-dark">Rockford, Illinois</td>--}}
    {{--<td class="text-dark">180</td>--}}
    {{--</tr>--}}
    {{--</tbody>--}}
    {{--</table>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
    </div>
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
    <script src="{{asset('dist/js/pages/dashboards/dashboard1.js')}}"></script>
    <script>
        $('.datepicker').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    </script>
@endpush