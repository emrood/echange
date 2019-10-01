@extends('backend.layouts.app')
@section('title') {{ 'Form Bootstrap Rangepicker | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Form Bootstrap Rangepicker'])
@endsection

@push('before-css')
    <!-- This Page CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/daterangepicker/daterangepicker.css')}}">

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
                        <!-- Default Daterange Picker -->
                        <h4 class="card-title">Default Daterange Picker</h4>
                        <h6 class="card-subtitle">These rangepicker is used for when you want to choose start
                            date to end date.</h6>
                        <div class='input-group my-3'>
                            <input type='text' class="form-control daterange" />
                            <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                            </div>
                        </div>
                        <!-- Date And Time -->
                        <h4 class="card-title m-t-30">Date and Time</h4>
                        <h6 class="card-subtitle">These picker is used for when you want to choose start date
                            to end date with particuler time for both start date and end date.</h6>
                        <div class='input-group my-3'>
                            <input type='text' class="form-control datetime" />
                            <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                            </div>
                        </div>
                        <!-- Date Limitation -->
                        <h4 class="card-title m-t-30">Limit on Date</h4>
                        <h6 class="card-subtitle">In these picker,maximum timespan between deadline dates.</h6>
                        <div class='input-group my-3'>
                            <input type='text' class="form-control dateLimit" />
                            <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
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
    <script src="{{asset('assets/libs/daterangepicker/daterangepicker.js')}}"></script>
    <script>
        /*******************************************/
        // Basic Date Range Picker
        /*******************************************/
        $('.daterange').daterangepicker();

        /*******************************************/
        // Date & Time
        /*******************************************/
        $('.datetime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY h:mm A'
            }
        });

        /*******************************************/
        // Date Limit
        /*******************************************/
        $('.dateLimit').daterangepicker({
            dateLimit: {
                days: 7
            },
        });
    </script>
@endpush
