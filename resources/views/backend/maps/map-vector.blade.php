@extends('backend.layouts.app')
@section('title') {{ 'Vector Map | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Vector Map'])
@endsection

@push('before-css')
    <link href="{{asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />

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
                        <h4 class="card-title">World Map</h4>
                        <div id="world-map-markers" style="height: 700px;"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">India</h4>
                        <div id="india" style="height: 450px;"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">USA</h4>
                        <div id="usa" style="height: 450px;"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Australia Map</h4>
                        <div id="australia" style="height: 450px;"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Uk Map</h4>
                        <div id="uk" style="height: 450px;"></div>
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
    <!-- This Page JS -->
    <script src="{{asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assets/extra-libs/jvector/jquery-jvectormap-in-mill.js')}}"></script>
    <script src="{{asset('assets/extra-libs/jvector/jquery-jvectormap-us-aea-en.js')}}"></script>
    <script src="{{asset('assets/extra-libs/jvector/jquery-jvectormap-uk-mill-en.js')}}"></script>
    <script src="{{asset('assets/extra-libs/jvector/jquery-jvectormap-au-mill.js')}}"></script>
    <script src="{{asset('assets/extra-libs/jvector/jvectormap.custom.js')}}"></script>
@endpush