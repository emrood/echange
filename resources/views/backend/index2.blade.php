@extends('backend.layouts.app')
@section('title') {{ 'Dashboard 2 | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Dashboard 2'])
@endsection

@push('after-css')
@endpush
@section('content')
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card oh">
                    <div class="card-body">
                        <div class="d-flex">
                            <div>
                                <span class="text-dark font-medium op-7 d-block mb-2">Profit</span>
                                <h3 class="mb-0">5,600</h3>
                            </div>
                            <div class="ml-auto align-self-end mb-1">
                                <span class="text-success"><i class="fas fa-caret-up mr-1"></i> 2.41</span>
                            </div>
                        </div>
                    </div>
                    <div style="height: 80px;">
                        <canvas id="chart1" height="120"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card oh">
                    <div class="card-body">
                        <div class="d-flex">
                            <div>
                                <span class="text-dark font-medium op-7 d-block mb-2">New Customers</span>
                                <h3 class="mb-0">180</h3>
                            </div>
                            <div class="ml-auto align-self-end mb-1">
                                <span class="text-danger"><i class="fas fa-caret-down mr-1"></i> 2.41</span>
                            </div>
                        </div>
                    </div>
                    <div style="height: 80px;">
                        <canvas id="chart2" height="120"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card oh">
                    <div class="card-body">
                        <div class="d-flex">
                            <div>
                                <span class="text-dark font-medium op-7 d-block mb-2">Profit</span>
                                <h3 class="mb-0">5,600</h3>
                            </div>
                            <div class="ml-auto align-self-end mb-1">
                                <span class="text-success"><i class="fas fa-caret-up mr-1"></i> 2.41</span>
                            </div>
                        </div>
                    </div>
                    <div style="height: 80px;">
                        <canvas id="chart3" height="120"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card oh">
                    <div class="card-body">
                        <div class="d-flex">
                            <div>
                                <span class="text-dark font-medium op-7 d-block mb-2">New Customers</span>
                                <h3 class="mb-0">180</h3>
                            </div>
                            <div class="ml-auto align-self-end mb-1">
                                <span class="text-danger"><i class="fas fa-caret-down mr-1"></i> 2.41</span>
                            </div>
                        </div>
                    </div>
                    <div style="height: 80px;">
                        <canvas id="chart4" height="120"></canvas>
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
            <!-- column -->
            <div class="col-md-12 col-lg-7">
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
                        <div class="mt-5" style="height: 205px;">
                            <canvas id="bar-chart" width="400" height="150"></canvas>
                        </div>
                        <div class="row mt-5 mb-3">
                            <div class="col-6 col-md-4">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <i class="text-primary" data-feather="target"></i>
                                    </div>
                                    <div class="ml-2">
                                        <h3 class="mb-0">$3,567.56</h3>
                                        <span>Total Income</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <i class="text-primary" data-feather="trending-up"></i>
                                    </div>
                                    <div class="ml-2">
                                        <h3 class="mb-0">$769.08</h3>
                                        <span>Monthly Avg</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 mt-3 mt-md-0">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <i class="text-primary" data-feather="shopping-bag"></i>
                                    </div>
                                    <div class="ml-2">
                                        <h3 class="mb-0">5489</h3>
                                        <span>Total Sales</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-5">
                <div class="card bg-purple">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <span class="text-white op-7 d-block mb-1">Sales</span>
                                <h2 class="d-flex align-items-center text-white mb-0">5489 <span
                                            class="font-14 op-7 font-normal ml-2"><i
                                                class="fas fa-caret-up mr-1"></i>18%</span></h2>
                            </div>
                            <div class="ml-auto">
                                <i class="text-white op-3" data-feather="shopping-bag"></i>
                            </div>
                        </div>
                        <ul class="list-inline monthly-sale mt-3 mb-0">
                            <li class="list-inline-item">Oct 18</li>
                            <li class="list-inline-item">Nov 18</li>
                            <li class="list-inline-item active">Dec 18</li>
                            <li class="list-inline-item">Jan 19</li>
                            <li class="list-inline-item">Feb 19</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="card-title">Support Power</h4>
                                <h6 class="card-subtitle mb-0">Your support team performance.</h6>
                            </div>
                            <div class="ml-auto">
                                <div class="dl mb-2">
                                    <select class="custom-select border-0 font-medium text-dark">
                                        <option value="0">Oct 18</option>
                                        <option value="1">Nov 18</option>
                                        <option value="2">Dec 18</option>
                                        <option value="3">Jan 19</option>
                                        <option value="4" selected>Feb 19</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6 col-md-5">
                                <div id="power-chart" class="mt-3" style="height:165px; width:100%;"></div>
                            </div>
                            <div class="col-6 col-md-7">
                                <h2 class="mb-0">78% <span class="text-success font-14 font-normal ml-2"><i
                                                class="fas fa-caret-up mr-1"></i>14%</span></h2>
                                <span class="text-dark font-medium op-7 d-block mb-2">Satisfied Customers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Product Sales & Blog -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-lg-7 col-md-12">
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
                            <div class="custom-input icon-left w-100 w-md-50 mr-3 mt-3">
                                <input type="text" class="form-control" placeholder="Search...">
                                <i class="form-control-icon" data-feather="search"></i>
                            </div>
                            <div class="custom-input ml-auto w-100 w-md-50 mt-3">
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
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/600x600?text=user" alt="user"
                                                 class="rounded-circle"
                                                 width="40"/>
                                            <div class="ml-2">
                                                <span class="text-dark">Mark Freeman</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-dark">Rockford, Illinois</td>
                                    <td class="text-dark">180</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/600x600?text=user" alt="user"
                                                 class="rounded-circle"
                                                 width="40"/>
                                            <div class="ml-2">
                                                <span class="text-dark">Mark Freeman</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-dark">Rockford, Illinois</td>
                                    <td class="text-dark">180</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/600x600?text=user" alt="user"
                                                 class="rounded-circle"
                                                 width="40"/>
                                            <div class="ml-2">
                                                <span class="text-dark">Mark Freeman</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-dark">Rockford, Illinois</td>
                                    <td class="text-dark">180</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/600x600?text=user" alt="user"
                                                 class="rounded-circle"
                                                 width="40"/>
                                            <div class="ml-2">
                                                <span class="text-dark">Mark Freeman</span>
                                            </div>
                                        </div>
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
            <div class="col-lg-5 col-md-12">
                <div id="blog-carousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active carousel-item">
                            <div class="overlaybg">
                                <img src="https://via.placeholder.com/430x514?text=Background" class="card-img-radius img-fluid"
                                     alt="blog">
                            </div>
                            <div class="d-flex flex-column justify-content-between card-img-overlay p-4">
                                <div class="author d-flex align-items-center">
                                    <div>
                                        <img src="https://via.placeholder.com/52x52?text=user" alt="user"
                                             class="rounded-circle"
                                             width="50">
                                    </div>
                                    <div class="ml-3">
                                                <span class="text-white font-medium">
                                                    Mendy Simmons
                                                    <span class="text-muted font-normal">/
                                                        Added blog post
                                                    </span>
                                                </span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="category mb-2">
                                        <span class="text-muted">Travel,</span>&nbsp;
                                        <span class="text-muted">Life</span>
                                    </div>
                                    <h2 class="text-white font-light">Risus commodo viverra maecenas
                                        accumsan lacus vel facilisis.</h2>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <button class="btn btn-rounded bg-gradient-primary text-white text-uppercase">
                                            Review
                                        </button>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="text-muted">3 hours ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="overlaybg">
                                <img src="https://via.placeholder.com/430x514?text=Background" class="card-img-radius img-fluid"
                                     alt="blog">
                            </div>
                            <div class="d-flex flex-column justify-content-between card-img-overlay p-4">
                                <div class="author d-flex align-items-center">
                                    <div>
                                        <img src="https://via.placeholder.com/52x52?text=user" alt="user"
                                             class="rounded-circle"
                                             width="50">
                                    </div>
                                    <div class="ml-3">
                                                <span class="text-white font-medium">
                                                    Mendy Simmons
                                                    <span class="text-muted font-normal">/
                                                        Added blog post
                                                    </span>
                                                </span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="category mb-2">
                                        <span class="text-muted">Wildlife,</span>&nbsp;
                                        <span class="text-muted">Ocean</span>
                                    </div>
                                    <h2 class="text-white font-light">Risus commodo viverra maecenas
                                        accumsan lacus vel facilisis.</h2>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <button class="btn btn-rounded bg-gradient-primary text-white text-uppercase">
                                            Review
                                        </button>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="text-muted">3 hours ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="overlaybg">
                                <img src="https://via.placeholder.com/430x514?text=Background" class="card-img-radius img-fluid"
                                     alt="blog">
                            </div>
                            <div class="d-flex flex-column justify-content-between card-img-overlay p-4">
                                <div class="author d-flex align-items-center">
                                    <div>
                                        <img src="https://via.placeholder.com/52x52?text=user" alt="user"
                                             class="rounded-circle"
                                             width="50">
                                    </div>
                                    <div class="ml-3">
                                                <span class="text-white font-medium">
                                                    Mendy Simmons
                                                    <span class="text-muted font-normal">/
                                                        Added blog post
                                                    </span>
                                                </span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="category mb-2">
                                        <span class="text-muted">Trekking,</span>&nbsp;
                                        <span class="text-muted">Mountains</span>
                                    </div>
                                    <h2 class="text-white font-light">Risus commodo viverra maecenas
                                        accumsan lacus vel facilisis.</h2>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <button class="btn btn-rounded bg-gradient-primary text-white text-uppercase">
                                            Review
                                        </button>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="text-muted">3 hours ago</span>
                                    </div>
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
@endsection
@push('js')

    <!--This page JavaScript -->
    <script src="{{asset('assets/libs/chart.js/dist/Chart.min.js')}}"></script>
    <!--c3 charts -->
    <script src="{{asset('assets/extra-libs/c3/d3.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/c3/c3.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('dist/js/pages/dashboards/dashboard2.js')}}"></script>
    <script>
        $('.datepicker').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    </script>
@endpush


