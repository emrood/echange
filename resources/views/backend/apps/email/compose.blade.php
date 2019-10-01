@extends('backend.layouts.app')
@section('title') {{ 'Email Compose | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Email Compose'])
@endsection

@push('after-css')
    <!-- This Page CSS -->
    <link href="{{asset('assets/libs/summernote/dist/summernote-bs4.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet">
@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Email App Part -->
        <!-- ============================================================== -->
        <div class="email-app">
            <!-- ============================================================== -->
            <!-- Left Part -->
            <!-- ============================================================== -->
            <div class="left-part bg-white">
                <a class="ti-menu ti-close btn btn-success show-left-part d-block d-md-none" href="javascript:void(0)"></a>
                <div class="scrollable" style="height:100%;">
                    <div class="p-15">
                        <a id="compose_mail" class="waves-effect waves-light btn btn-danger d-block" href="javascript: void(0)">Compose</a>
                    </div>
                    <div class="divider"></div>
                    <ul class="list-group">
                        <li>
                            <small class="p-15 grey-text text-lighten-1 db">Folders</small>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="active list-group-item-action"><i class="mdi mdi-inbox"></i>
                                Inbox <span class="label label-success float-right">6</span></a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-star"></i>
                                Starred </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-send"></i>
                                Draft <span class="label label-danger float-right">3</span></a></li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-email"></i>
                                Sent Mail </a>
                        </li>
                        <li class="list-group-item">
                            <hr>
                        </li>
                        <li>
                            <small class="p-15 grey-text text-lighten-1 db">Labels</small>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"><i class="text-danger mdi mdi-checkbox-blank-circle"></i>
                                Work </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"><i class="text-cyan mdi mdi-checkbox-blank-circle"></i>
                                Business </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"><i class="text-warning mdi mdi-checkbox-blank-circle"></i>
                                Family </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"><i class="text-info mdi mdi-checkbox-blank-circle"></i>
                                Friends </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Right Part -->
            <!-- ============================================================== -->
            <div class="right-part mail-compose bg-white">
                <div class="p-20 border-bottom">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4>Compose</h4>
                            <span>create new message</span>
                        </div>
                    </div>
                </div>
                <!-- Action part -->
                <!-- Button group part -->
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <input type="email" id="example-email" name="example-email" class="form-control"
                                   placeholder="To">
                        </div>
                        <div class="form-group">
                            <input type="text" id="example-subject" name="example-subject" class="form-control"
                                   placeholder="Subject">
                        </div>
                        <div id="summernote"></div>
                        <h4>Attachment</h4>
                        <div class="dropzone" id="dzid">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success m-t-20"><i class="far fa-envelope"></i>
                            Send</button>
                        <button type="submit" class="btn btn-dark m-t-20">Discard</button>
                    </form>
                    <!-- Action part -->
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Email App Part -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection    

@push('js')
    <!-- This Page JS -->
    <script src="{{asset('assets/libs/summernote/dist/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Type your email Here',
            tabsize: 2,
            height: 250
        });
        $("#dzid").dropzone({
            url: "/file/post"
        });
    </script>
@endpush    
