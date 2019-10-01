@extends('backend.layouts.app')
@section('title') {{ 'Form Bootstrap datepicker | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Form Bootstrap datepicker'])
@endsection

@push('before-css')
    <!-- This Page CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

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
                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="example">
                                    <h4 class="card-title">Default Datedpicker</h4>
                                    <h6 class="card-subtitle">just add class <code>.mydatepicker</code> to
                                        create it.</h6>
                                    <div class="input-group my-3">
                                        <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="icon-calender"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="example">
                                    <h4 class="card-title mt-4">Autoclose Datedpicker</h4>
                                    <h6 class="card-subtitle">just add class <code>.complex-colorpicker</code>
                                        to create it.</h6>
                                    <div class="input-group my-3">
                                        <input type="text" class="form-control" id="datepicker-autoclose"
                                               placeholder="mm/dd/yyyy">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="icon-calender"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="example">
                                    <h4 class="card-title mt-4">Default Datedpicker click on icon</h4>
                                    <h6 class="card-subtitle">just add class <code>.date</code> to create it.</h6>
                                    <div class="input-group my-3 date">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon input-group-text"><i class="icon-calender"></i></span>
                                    </div>
                                </div>
                                <div class="example">
                                    <h4 class="card-title mt-4">Date Range picker</h4>
                                    <h6 class="card-subtitle">just add id <code>#date-range</code> to create
                                        it.</h6>
                                    <div class="input-daterange input-group my-3" id="date-range">
                                        <input type="text" class="form-control" name="start" />
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-info b-0 text-white">TO</span>
                                        </div>
                                        <input type="text" class="form-control" name="end" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="">
                                    <h4 class="card-title mt-4">Datepicker Inline</h4>
                                    <h6 class="card-subtitle">You also can set the datepicker to be inline and
                                        flat.</h6>
                                    <div id="datepicker-inline" class="mt-4"></div>
                                </div>
                            </div>
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
    <!-- This Page JS -->
    <script src="{{asset('assets/libs/moment/moment.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script>
        // Date Picker
        jQuery('.mydatepicker, #datepicker, .input-group.date').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#date-range').datepicker({
            toggleActive: true
        });
        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true
        });
    </script>
@endpush

