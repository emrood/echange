@extends('backend.layouts.app')
@section('title') {{ 'C3 Axis Chart | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'C3 Axis Chart'])
@endsection

@push('before-css')
    <!-- This Page CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/c3/c3.min.css')}}">

@endpush
@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Start Rotated Axis Chart -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Rotated Axis Chart</h4>
                        <div id="rotated-axis"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Rotated Axis Chart -->
        <!-- Start Axis Chart -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category Axis Chart</h4>
                        <div id="category-axis"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Axis Chart -->
        <!-- Start X axis tick culling Chart -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">X axis tick culling Chart</h4>
                        <div id="tick-culling"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End X axis tick culling Chart -->
        <!-- Start X axis tick fitting Chart -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">X axis tick fitting Chart</h4>
                        <div id="tick-fitting"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End X axis tick fitting Chart -->
        <!-- Start X axis timezone Chart -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">X axis timezone Chart</h4>
                        <div id="axis-timezone"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End X axis timezone Chart -->
        <!-- Start Y axis Chart -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Y axis Chart</h4>
                        <div id="y-axis"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Y axis Chart -->
        <!-- Start Range for Y axis Chart -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Range for Y axis Chart</h4>
                        <div id="range-y-axis"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Range for Y axis Chart -->
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
    <!-- This Page Plugins -->
    <script src="{{asset('assets/extra-libs/c3/d3.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/c3/c3.min.js')}}"></script>
    <!-- Charts JS -->
    <script src="{{asset('dist/js/pages/c3-chart/axis/c3-rotated-axis.js')}}"></script>
    <script src="{{asset('dist/js/pages/c3-chart/axis/c3-category-axis.js')}}"></script>
    <script src="{{asset('dist/js/pages/c3-chart/axis/c3-tick-culling.js')}}"></script>
    <script src="{{asset('dist/js/pages/c3-chart/axis/c3-tick-fitting.js')}}"></script>
    <script src="{{asset('dist/js/pages/c3-chart/axis/c3-timezone.js')}}"></script>
    <script src="{{asset('dist/js/pages/c3-chart/axis/c3-y-axis.js')}}"></script>
    <script src="{{asset('dist/js/pages/c3-chart/axis/c3-y-axis-range.js')}}"></script>
@endpush         
