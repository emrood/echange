@extends('backend.layouts.app')
@section('title') {{ 'Charts-Js Chart | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Charts-Js Chart'])
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
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Line Chart</h4>
                        <div>
                            <canvas id="line-chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bar Chart</h4>
                        <div>
                            <canvas id="bar-chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Pie Chart</h4>
                        <div>
                            <canvas id="pie-chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">bar-chart-horizontal</h4>
                        <div>
                            <canvas id="bar-chart-horizontal" height="150"> </canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Polar Area Chart</h4>
                        <div>
                            <canvas id="polar-chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Radar Chart</h4>
                        <div>
                            <canvas id="radar-chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
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
    <script src="{{asset('dist/js/pages/chartjs/chartjs.init.js')}}"></script>
    <script src="{{asset('assets/libs/chart.js/dist/Chart.min.js')}}"></script>
@endpush