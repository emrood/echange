@extends('backend.layouts.app')
@section('title') {{ 'Session Timeout | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Session Timeout'])
@endsection

@push('before-css')
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
                        <h4 class="card-title">Session Timeout Notification Control</h4>
                        <p>After a set amount of time, a dialog is shown to the user with the option to either
                            log out now, or stay connected. If log out now is selected, the page is redirected
                            to a logout URL. If stay connected is selected, a keep-alive URL is requested
                            through AJAX. If no options is selected after another set amount of time, the page
                            is automatically redirected to a timeout URL.</p>
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
    <script src="{{asset('assets/extra-libs/jquery-sessiontimeout/jquery.sessionTimeout.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/jquery-sessiontimeout/session-timeout-init.js')}}"></script>
@endpush