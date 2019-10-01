@extends('backend.layouts.app')
@section('title') {{ 'Sparkline Charts | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Sparkline Charts'])
@endsection

@push('before-css')
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
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body analytics-info">
                        <h4 class="card-title">Total Visit</h4>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash"></div>
                            </li>
                            <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">1659</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body analytics-info">
                        <h4 class="card-title">Total Page Views</h4>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash2"></div>
                            </li>
                            <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">7469</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body analytics-info">
                        <h4 class="card-title">Unique Visitor</h4>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash3"></div>
                            </li>
                            <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">6011</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body analytics-info">
                        <h4 class="card-title">Bounce Rate</h4>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash4"></div>
                            </li>
                            <li class="text-right"><i class="ti-arrow-down text-danger"></i> <span class="text-danger">18%</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body analytics-info">
                        <h4 class="card-title">Total Visit <small class="pull-right text-success"><i class="fa fa-sort-asc"></i>
                                18% High then last month</small></h4>
                        <div class="d-flex no-block align-items-center">
                            <div class="">
                                <h6>Overall Growth</h6>
                                <b>80.40%</b>
                            </div>
                            <div class="m-l-15">
                                <h6>Montly</h6>
                                <b>15.40%</b>
                            </div>
                            <div class="m-l-15">
                                <h6>Day</h6>
                                <b>5.50%</b>
                            </div>
                        </div>
                        <div id="sparkline8"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body analytics-info">
                        <h4 class="card-title">Site Traffic</h4>
                        <div class="d-flex no-block align-items-center">
                            <div class="">
                                <h6>Overall Growth</h6>
                                <b>80.40%</b>
                            </div>
                            <div class="m-l-15">
                                <h6>Montly</h6>
                                <b>15.40%</b>
                            </div>
                            <div class="m-l-15">
                                <h6>Day</h6>
                                <b>5.50%</b>
                            </div>
                        </div>
                        <div id="sparkline9"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body analytics-info">
                        <h4 class="card-title">Site Visit</h4>
                        <div class="d-flex no-block align-items-center">
                            <div class="">
                                <h6>Overall Growth</h6>
                                <b>80.40%</b>
                            </div>
                            <div class="m-l-15">
                                <h6>Montly</h6>
                                <b>15.40%</b>
                            </div>
                            <div class="m-l-15">
                                <h6>Day</h6>
                                <b>5.50%</b>
                            </div>
                        </div>
                        <div id="sparkline10"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body analytics-info">
                        <h4 class="card-title">Bar Chart</h4>
                        <div id="sparkline12" class="text-center"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body analytics-info">
                        <h4 class="card-title">Pie Chart</h4>
                        <div id="sparkline11" class="text-center"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body analytics-info">
                        <h4 class="card-title">Composite Bar Chart</h4>
                        <div id="sparkline13" class="text-center"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body bg-primary analytics-info">
                        <h4 class="card-title text-white">Line Chart</h4>
                        <div id="sparkline14"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body analytics-info">
                        <h4 class="card-title">Bar with different color Chart</h4>
                        <div id="sparkline15" class="text-center"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body analytics-info">
                        <h4 class="card-title">Line Chart</h4>
                        <div id="sparkline16" class="text-center"></div>
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
    <!-- Chart JS -->
    <script src="{{asset('dist/js/pages/sparkline/jquery.charts-sparkline.js')}}"></script>
@endpush

