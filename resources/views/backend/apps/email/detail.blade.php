@extends('backend.layouts.app')
@section('title') {{ 'Email Detail | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Email Detail'])
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
            <div class="right-part mail-details bg-white">
                <div class="card-body">
                    <button type="button" id="back_to_inbox" class="btn btn-outline-secondary font-18 m-r-10"><i
                                class="mdi mdi-arrow-left"></i></button>
                    <div class="btn-group m-r-10" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-reply"></i></button>
                        <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-alert-octagon"></i></button>
                        <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-delete"></i></button>
                    </div>
                </div>
                <div class="card-body border-top border-bottom bg-light">
                    <h4 class="m-b-0">Your Message title goes here</h4>
                </div>
                <div class="card-body border-bottom">
                    <div class="d-flex no-block align-items-center m-b-40">
                        <div class="m-r-10"><img src="https://via.placeholder.com/52x52?text=user" alt="user" class="rounded-circle"
                                                 width="45"></div>
                        <div class="">
                            <h5 class="m-b-0 font-16 font-medium">Hanna Gover <small> ( hgover@gmail.com )</small></h5><span>to
                                        Suniljoshi19@gmail.com</span>
                        </div>
                    </div>
                    <h4 class="m-b-15">Hey Hi,</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                        dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
                        sem.Nulla
                        consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate
                        eget,
                        arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                        felis
                        eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                        dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
                        sem.Nulla
                        consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate
                        eget,
                        arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                        felis
                        eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                </div>
                <div class="card-body">
                    <h4><i class="fa fa-paperclip m-r-10 m-b-10"></i> Attachments <span>(3)</span></h4>
                    <div class="row">
                        <div class="col-md-2">
                            <a href="javascript:void(0)"> <img class="img-thumbnail img-responsive" alt="attachment"
                                                               src="https://via.placeholder.com/890x593?text=Attachment"> </a>
                        </div>
                        <div class="col-md-2">
                            <a href="javascript:void(0)"> <img class="img-thumbnail img-responsive" alt="attachment"
                                                               src="https://via.placeholder.com/890x593?text=Attachment"> </a>
                        </div>
                        <div class="col-md-2">
                            <a href="javascript:void(0)"> <img class="img-thumbnail img-responsive" alt="attachment"
                                                               src="https://via.placeholder.com/890x593?text=Attachment"> </a>
                        </div>
                    </div>
                    <div class="border m-t-20 p-15">
                        <p class="p-b-20">click here to <a href="javascript:void(0)">Reply</a> or <a href="javascript:void(0)">Forward</a></p>
                    </div>
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