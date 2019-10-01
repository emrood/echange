@extends('backend.layouts.app')
@section('title') {{ 'Block UI | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Block UI'])
@endsection

@push('before-css')
@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <h4 class="card-title">Block Element</h4>
                            <p>Block content components.</p>
                            <button class="btn btn-lg btn-block font-medium btn-outline-success block-card">Block
                                Card</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <h4 class="card-title">Block Layout Area</h4>
                            <p>Block layout areas.</p>
                            <button class="btn btn-lg btn-block font-medium btn-outline-warning block-sidenav">Block
                                Sidebar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <h4 class="card-title">Block Whole Page</h4>
                            <p>Block Whole Page</p>
                            <button class="btn btn-lg btn-block font-medium btn-outline-danger block-default">Block
                                Page</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <h4 class="card-title">Block Without Message</h4>
                            <p>Block Wihtout Message.</p>
                            <button class="btn btn-lg btn-block font-medium btn-outline-cyan without-msg">Block
                                Wihtout Message</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <h4 class="card-title">Block Without Overlay</h4>
                            <p>Block Without Overlay.</p>
                            <button class="btn btn-lg btn-block font-medium btn-outline-warning without-overlay">Block
                                Without Overlay</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <h4 class="card-title">Click Overlay To Unblock</h4>
                            <p>Click Overlay To Unblock</p>
                            <button class="btn btn-lg btn-block font-medium btn-outline-danger overlay-unblock">Click
                                Overlay To Unblock</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <h4 class="card-title">Growl Notification</h4>
                            <p>Growl Notification.</p>
                            <button class="btn btn-lg btn-block font-medium btn-outline-success growl">Growl
                                Notification</button>
                            <div class="growl-notification-example" style="display: none; cursor: default;">
                                Growl Notification Example
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <h4 class="card-title">OnBlock Callback</h4>
                            <p>OnBlock Callback</p>
                            <button class="btn btn-lg btn-block font-medium btn-outline-success onblock">OnBlock</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <h4 class="card-title">OnUnblock Callback</h4>
                            <p>useful when using fadeOut option as it is invoked when all the blocking elements
                                have been removed.</p>
                            <button class="btn btn-lg btn-block font-medium btn-outline-warning onunblock">OnUnblock</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <h4 class="card-title">OnOverlay Click Callback</h4>
                            <p>OnOverlay Click Callback.</p>
                            <button class="btn btn-lg btn-block font-medium btn-outline-danger onoverlay-click">OnOverlay
                                Click</button>
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
    <script src="{{asset('assets/libs/block-ui/jquery.blockUI.js')}}"></script>
    <script src="{{asset('assets/extra-libs/block-ui/block-ui.js')}}"></script>
@endpush

