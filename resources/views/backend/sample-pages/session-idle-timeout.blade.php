@extends('backend.layouts.app')
@section('title') {{ 'Session Idle Timeout | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Session Idle Timeout'])
@endsection

@push('before-css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Session Idle Timeout</h4>
                        <p>This plugin allows you to detect whether a user is idle on website or working. It
                            will notify the user if he/she is idle for the time specified in the plugin's
                            settings. The user will be given a choice whether he/she wants to continue working
                            or not. If not than screen will be locked after the specified time. User will have
                            to enter the password to continue working after that. Here, for the demo purpose,
                            notifying time is set to 5s and timeout time is set to 30s. In real time
                            application it should be much higher number.</p>
                        <div id="idle-timeout-dialog" data-backdrop="static" class="modal fade" tabindex="-1"
                             role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Your session is expiring soon</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            <i class="fa fa-warning font-red"></i> You session will be locked
                                            in
                                            <span id="idle-timeout-counter"></span> seconds.</p>
                                        <p> Do you want to continue your session? </p>
                                    </div>
                                    <div class="modal-footer text-center">
                                        <button id="idle-timeout-dialog-keepalive" type="button" class="btn btn-success"
                                                data-dismiss="modal">Yes, Keep Working</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection
@push('js')
    <!-- This Page JS -->
    <script src="{{asset('assets/extra-libs/jquery-sessiontimeout/idle/jquery.idletimeout.js')}}"></script>
    <script src="{{asset('assets/extra-libs/jquery-sessiontimeout/idle/jquery.idletimer.js')}}"></script>
    <script src="{{asset('assets/extra-libs/jquery-sessiontimeout/idle/session-timeout-idle-init.js')}}"></script>
@endpush

