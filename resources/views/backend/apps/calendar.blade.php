@extends('backend.layouts.app')

@section('title') {{ 'Calender | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
@include('backend.layouts.partials.breadcrumbs',['current' => 'Calender'])
@endsection

@push('before-css')
@endpush

@push('after-css')
    <!-- Custom CSS -->
    <link href="{{asset('assets/libs/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/extra-libs/calendar/calendar.css')}}" rel="stylesheet" />
@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-3 border-right p-r-0">
                                <div class="card-body border-bottom">
                                    <h4 class="card-title m-t-10">Drag & Drop Event</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="calendar-events" class="">
                                                <div class="calendar-events m-b-20" data-class="bg-info"><i
                                                            class="fa fa-circle text-info m-r-10"></i>Event One
                                                </div>
                                                <div class="calendar-events m-b-20" data-class="bg-success"><i
                                                            class="fa fa-circle text-success m-r-10"></i> Event Two
                                                </div>
                                                <div class="calendar-events m-b-20" data-class="bg-danger"><i
                                                            class="fa fa-circle text-danger m-r-10"></i>Event Three
                                                </div>
                                                <div class="calendar-events m-b-20" data-class="bg-warning"><i
                                                            class="fa fa-circle text-warning m-r-10"></i>Event Four
                                                </div>
                                            </div>
                                            <!-- checkbox -->
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="drop-remove">
                                                <label class="custom-control-label" for="drop-remove">Remove
                                                    after drop</label>
                                            </div>
                                            <a href="javascript:void(0)" data-toggle="modal"
                                               data-target="#add-new-event"
                                               class="btn m-t-20 btn-info btn-block waves-effect waves-light">
                                                <i class="ti-plus"></i> Add New Event
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="card-body b-l calender-sidebar">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN MODAL -->
        <div class="modal none-border" id="my-event">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><strong>Add Event</strong></h4>
                        <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect"
                                data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                            event</button>
                        <button type="button" class="btn btn-danger delete-event waves-effect waves-light"
                                data-dismiss="modal">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Add Category -->
        <div class="modal fade none-border" id="add-new-event">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><strong>Add</strong> a category</h4>
                        <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Category Name</label>
                                    <input class="form-control form-white" placeholder="Enter name" type="text"
                                           name="category-name" />
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Choose Category Color</label>
                                    <select class="form-control form-white" data-placeholder="Choose a color..."
                                            name="category-color">
                                        <option value="success">Success</option>
                                        <option value="danger">Danger</option>
                                        <option value="info">Info</option>
                                        <option value="primary">Primary</option>
                                        <option value="warning">Warning</option>
                                        <option value="inverse">Inverse</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect waves-light save-category"
                                data-dismiss="modal">Save</button>
                        <button type="button" class="btn btn-secondary waves-effect"
                                data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection

@push('js')
    <script src="{{asset('assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js')}}"></script>
    <script src="{{asset('assets/extra-libs/taskboard/js/jquery-ui.min.js')}}"></script>

    <script src="{{asset('dist/js/feather.min.js')}}"></script>
    <!--This page JavaScript -->
    <script src="{{asset('assets/libs/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('assets/libs/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{asset('dist/js/pages/calendar/cal-init.js')}}"></script>
@endpush

