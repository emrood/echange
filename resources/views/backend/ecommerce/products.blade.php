@extends('backend.layouts.app')
@section('title') {{ 'Products | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Products'])
@endsection

@push('before-css')
    <link href="{{asset('assets/libs/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet">
@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row el-element-overlay">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img src="https://via.placeholder.com/288x355?text=Product"
                                                                      alt="user"/>
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a
                                                class="btn default btn-outline image-popup-vertical-fit el-link"
                                                href="https://via.placeholder.com/288x355?text=Product"><i
                                                    class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link"
                                                           href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex no-block align-items-center">
                            <div class="m-l-15">
                                <h4 class="m-b-0">Rounded Chair</h4>
                                <span class="text-muted">globe type chair for rest</span>
                            </div>
                            <div class="ml-auto m-r-15">
                                <button type="button" class="btn btn-dark btn-circle">$15</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img
                                    src="https://via.placeholder.com/288x355?text=Product"
                                    alt="user"/>
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a
                                                class="btn default btn-outline image-popup-vertical-fit el-link"
                                                href="https://via.placeholder.com/288x355?text=Product"><i
                                                    class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link"
                                                           href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex no-block align-items-center">
                            <div class="m-l-15">
                                <h4 class="m-b-0">Rounded Chair</h4>
                                <span class="text-muted">globe type chair for rest</span>
                            </div>
                            <div class="ml-auto m-r-15">
                                <button type="button" class="btn btn-success btn-circle">$15</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img
                                    src="https://via.placeholder.com/288x355?text=Product"
                                    alt="user"/>
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a
                                                class="btn default btn-outline image-popup-vertical-fit el-link"
                                                href="https://via.placeholder.com/288x355?text=Product"><i
                                                    class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link"
                                                           href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex no-block align-items-center">
                            <div class="m-l-15">
                                <h4 class="m-b-0">Rounded Chair</h4>
                                <span class="text-muted">globe type chair for rest</span>
                            </div>
                            <div class="ml-auto m-r-15">
                                <button type="button" class="btn btn-dark btn-circle">$15</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img
                                    src="https://via.placeholder.com/288x355?text=Product"
                                    alt="user"/>
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a
                                                class="btn default btn-outline image-popup-vertical-fit el-link"
                                                href="https://via.placeholder.com/288x355?text=Product"><i
                                                    class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link"
                                                           href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex no-block align-items-center">
                            <div class="m-l-15">
                                <h4 class="m-b-0">Rounded Chair</h4>
                                <span class="text-muted">globe type chair for rest</span>
                            </div>
                            <div class="ml-auto m-r-15">
                                <button type="button" class="btn btn-info btn-circle">$15</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img
                                    src="https://via.placeholder.com/288x355?text=Product"
                                    alt="user"/>
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a
                                                class="btn default btn-outline image-popup-vertical-fit el-link"
                                                href="https://via.placeholder.com/288x355?text=Product"><i
                                                    class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link"
                                                           href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex no-block align-items-center">
                            <div class="m-l-15">
                                <h4 class="m-b-0">Rounded Chair</h4>
                                <span class="text-muted">globe type chair for rest</span>
                            </div>
                            <div class="ml-auto m-r-15">
                                <button type="button" class="btn btn-success btn-circle">$15</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img
                                    src="https://via.placeholder.com/288x355?text=Product"
                                    alt="user"/>
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a
                                                class="btn default btn-outline image-popup-vertical-fit el-link"
                                                href="https://via.placeholder.com/288x355?text=Product"><i
                                                    class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link"
                                                           href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex no-block align-items-center">
                            <div class="m-l-15">
                                <h4 class="m-b-0">Rounded Chair</h4>
                                <span class="text-muted">globe type chair for rest</span>
                            </div>
                            <div class="ml-auto m-r-15">
                                <button type="button" class="btn btn-info btn-circle">$15</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img
                                    src="https://via.placeholder.com/288x355?text=Product"
                                    alt="user"/>
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a
                                                class="btn default btn-outline image-popup-vertical-fit el-link"
                                                href="https://via.placeholder.com/288x355?text=Product"><i
                                                    class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link"
                                                           href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex no-block align-items-center">
                            <div class="m-l-15">
                                <h4 class="m-b-0">Rounded Chair</h4>
                                <span class="text-muted">globe type chair for rest</span>
                            </div>
                            <div class="ml-auto m-r-15">
                                <button type="button" class="btn btn-warning btn-circle">$15</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img src="https://via.placeholder.com/288x355?text=Product"
                                                                      alt="user"/>
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a
                                                class="btn default btn-outline image-popup-vertical-fit el-link"
                                                href="https://via.placeholder.com/288x355?text=Product"><i
                                                    class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link"
                                                           href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex no-block align-items-center">
                            <div class="m-l-15">
                                <h4 class="m-b-0">Rounded Chair</h4>
                                <span class="text-muted">globe type chair for rest</span>
                            </div>
                            <div class="ml-auto m-r-15">
                                <button type="button" class="btn btn-secondary btn-circle">$15</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img
                                    src="https://via.placeholder.com/288x355?text=Product"
                                    alt="user"/>
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a
                                                class="btn default btn-outline image-popup-vertical-fit el-link"
                                                href="https://via.placeholder.com/288x355?text=Product"><i
                                                    class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link"
                                                           href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex no-block align-items-center">
                            <div class="m-l-15">
                                <h4 class="m-b-0">Rounded Chair</h4>
                                <span class="text-muted">globe type chair for rest</span>
                            </div>
                            <div class="ml-auto m-r-15">
                                <button type="button" class="btn btn-dark btn-circle">$15</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img
                                    src="https://via.placeholder.com/288x355?text=Product"
                                    alt="user"/>
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a
                                                class="btn default btn-outline image-popup-vertical-fit el-link"
                                                href="https://via.placeholder.com/288x355?text=Product"><i
                                                    class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link"
                                                           href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex no-block align-items-center">
                            <div class="m-l-15">
                                <h4 class="m-b-0">Rounded Chair</h4>
                                <span class="text-muted">globe type chair for rest</span>
                            </div>
                            <div class="ml-auto m-r-15">
                                <button type="button" class="btn btn-danger btn-circle">$15</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img
                                    src="https://via.placeholder.com/288x355?text=Product"
                                    alt="user"/>
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a
                                                class="btn default btn-outline image-popup-vertical-fit el-link"
                                                href="https://via.placeholder.com/288x355?text=Product"><i
                                                    class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link"
                                                           href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex no-block align-items-center">
                            <div class="m-l-15">
                                <h4 class="m-b-0">Rounded Chair</h4>
                                <span class="text-muted">globe type chair for rest</span>
                            </div>
                            <div class="ml-auto m-r-15">
                                <button type="button" class="btn btn-success btn-circle">$15</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img
                                    src="https://via.placeholder.com/288x355?text=Product"
                                    alt="user"/>
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a
                                                class="btn default btn-outline image-popup-vertical-fit el-link"
                                                href="https://via.placeholder.com/288x355?text=Product"><i
                                                    class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link"
                                                           href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex no-block align-items-center">
                            <div class="m-l-15">
                                <h4 class="m-b-0">Rounded Chair</h4>
                                <span class="text-muted">globe type chair for rest</span>
                            </div>
                            <div class="ml-auto m-r-15">
                                <button type="button" class="btn btn-dark btn-circle">$15</button>
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
    <script src="{{asset('assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/libs/magnific-popup/meg.init.js')}}"></script>
@endpush


