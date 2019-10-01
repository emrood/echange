@extends('backend.layouts.app')
@section('title') {{ 'Gallery | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Gallery'])
@endsection

@push('before-css')
    <link href="{{asset('assets/libs/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet">

@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row el-element-overlay">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="https://via.placeholder.com/890x593?text=Image"
                                                                       alt="user" />
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link"
                                                           href="https://via.placeholder.com/890x593?text=Image"><i class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="https://via.placeholder.com/890x593?text=Image"  alt="user" />
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link"
                                                           href="https://via.placeholder.com/890x593?text=Image"><i class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="https://via.placeholder.com/890x593?text=Image"   alt="user" />
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link"
                                                           href=https://via.placeholder.com/890x593?text=Image"><i class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="https://via.placeholder.com/890x593?text=Image"
                                                                       alt="user" />
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link"
                                                           href="https://via.placeholder.com/890x593?text=Image"><i class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src=https://via.placeholder.com/890x593?text=Image"
                                                                       alt="user" />
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link"
                                                           href=https://via.placeholder.com/890x593?text=Image"><i class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="https://via.placeholder.com/890x593?text=Image"
                                                                       alt="user" />
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link"
                                                           href="https://via.placeholder.com/890x593?text=Image"><i class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="https://via.placeholder.com/890x593?text=Image"
                                                                       alt="user" />
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link"
                                                           href="https://via.placeholder.com/890x593?text=Image"><i class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="https://via.placeholder.com/890x593?text=Image"
                                                                       alt="user" />
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link"
                                                           href="https://via.placeholder.com/890x593?text=Image"><i class="icon-magnifier"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i
                                                    class="icon-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-t-40">
            <div class="col-md-12">
                <h4 class="card-title">Other Gallery </h4>
                <h6 class="card-subtitle m-b-20 text-muted">you can make gallery like this</h6>
            </div>
        </div>
        <div class="card-columns el-element-overlay">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <a class="image-popup-vertical-fit" href="https://via.placeholder.com/890x593?text=Image"> <img src="https://via.placeholder.com/890x593?text=Image"
                                                                                                          alt="user" /> </a>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <a class="image-popup-vertical-fit" href="https://via.placeholder.com/890x593?text=Image"> <img src="https://via.placeholder.com/890x593?text=Image"
                                                                                                         alt="user" /> </a>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <a class="image-popup-vertical-fit" href="https://via.placeholder.com/890x593?text=Image"> <img src="https://via.placeholder.com/890x593?text=Image" alt="user" /> </a>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <a class="image-popup-vertical-fit" href="https://via.placeholder.com/890x593?text=Image"> <img src="https://via.placeholder.com/890x593?text=Image" alt="user" /> </a>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <a class="image-popup-vertical-fit" href="https://via.placeholder.com/890x593?text=Image"> <img src="https://via.placeholder.com/890x593?text=Image" alt="user" /> </a>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <a class="image-popup-vertical-fit" href="https://via.placeholder.com/890x593?text=Image"> <img src="https://via.placeholder.com/890x593?text=Image"
                                                                                                         alt="user" /> </a>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
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
    <script src="{{asset('assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/libs/magnific-popup/meg.init.js')}}"></script>
@endpush
