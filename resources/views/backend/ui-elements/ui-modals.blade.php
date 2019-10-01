@extends('backend.layouts.app')
@section('title') {{ 'Modals | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Modals'])
@endsection

@push('after-css')

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
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Extra Large modal <small>Click on image</small></h4>
                        <!-- sample modal content -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                             aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myLargeModalLabel">Extra Large modal</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <h4>Overflowing text to show scroll behavior</h4>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                            auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                            cursus magna, vel scelerisque nisl consectetur et. Donec sed odio
                                            dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger waves-effect text-left"
                                                data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <img src="../../assets/images/alert/model2.png" alt="default" data-toggle="modal"
                             data-target=".bs-example-modal-lg" class="model_img img-fluid" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Large modal <small>Click on image</small></h4>
                        <!-- sample modal content -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                             aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <h4>Overflowing text to show scroll behavior</h4>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                            auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                            cursus magna, vel scelerisque nisl consectetur et. Donec sed odio
                                            dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger waves-effect text-left"
                                                data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <img src="../../assets/images/alert/model2.png" alt="default" data-toggle="modal"
                             data-target=".bs-example-modal-lg" class="model_img img-fluid" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Medium model <small>Click on image</small></h4>
                        <!-- sample modal content -->
                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <h4>Overflowing text to show scroll behavior</h4>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                            auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                            cursus magna, vel scelerisque nisl consectetur et. Donec sed odio
                                            dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <img src="../../assets/images/alert/model.png" alt="default" data-toggle="modal"
                             data-target="#myModal" class="model_img img-fluid" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Small model <small>Click on image</small></h4>
                        <!-- sample modal content -->
                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
                             aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body"> content will be here </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <img src="../../assets/images/alert/model3.png" alt="default" data-toggle="modal"
                             data-target=".bs-example-modal-sm" class="model_img img-fluid" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Responsive model</h4>
                        <!-- sample modal content -->
                        <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">Modal Content is Responsive</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Recipient:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="control-label">Message:</label>
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light">Save
                                            changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal -->
                        <img src="../../assets/images/alert/model.png" alt="default" data-toggle="modal"
                             data-target="#responsive-modal" class="model_img img-fluid" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Scrolling long content</h4>
                        <!-- sample modal content -->
                        <div class="modal fade long-modal" tabindex="-1" role="dialog" aria-labelledby="longmodal"
                             aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="longmodal">Large modal</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <h4>Overflowing text to show scroll behavior</h4>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                            auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                            cursus magna, vel scelerisque nisl consectetur et. Donec sed odio
                                            dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                            auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                            cursus magna, vel scelerisque nisl consectetur et. Donec sed odio
                                            dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                            auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                            cursus magna, vel scelerisque nisl consectetur et. Donec sed odio
                                            dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                            auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                            cursus magna, vel scelerisque nisl consectetur et. Donec sed odio
                                            dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                            auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                            cursus magna, vel scelerisque nisl consectetur et. Donec sed odio
                                            dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                            auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                            cursus magna, vel scelerisque nisl consectetur et. Donec sed odio
                                            dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                            auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                            cursus magna, vel scelerisque nisl consectetur et. Donec sed odio
                                            dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger waves-effect text-left"
                                                data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <img src="../../assets/images/alert/model2.png" alt="default" data-toggle="modal"
                             data-target=".long-modal" class="model_img img-fluid" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Vertically Center</h4>
                        <!-- sample modal content -->
                        <div id="verticalcenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter"
                             aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="vcenter">Modal Heading</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <h4>Overflowing text to show scroll behavior</h4>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                            auctor.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <img src="../../assets/images/alert/model.png" alt="default" data-toggle="modal"
                             data-target="#verticalcenter" class="model_img img-fluid" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tooltips & Popovers</h4>
                        <!-- sample modal content -->
                        <div id="tooltipmodals" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="tooltipmodel"
                             aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="tooltipmodel">Modal Heading</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>Popover in a modal</h5>
                                        <p>This <button type="button" class="btn btn-secondary" data-container="body"
                                                        title="Popover title" data-toggle="popover" data-placement="top"
                                                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover
                                                on top</button> triggers a popover on click.</p>
                                        <hr>
                                        <h5>Tooltips in a modal</h5>
                                        <p><a href="#" data-toggle="tooltip" data-placement="top" title="Tooltip on top">This
                                                link</a> and <a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Tooltip on top">that link</a> have tooltips on hover.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <img src="../../assets/images/alert/model.png" alt="default" data-toggle="modal"
                             data-target="#tooltipmodals" class="model_img img-fluid" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Modal with Grid</h4>
                        <!-- sample modal content -->
                        <div id="grid-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="grid-title"
                             aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="grid-title">Modal Heading</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row border border-dark mt-3">
                                                <div class="col-md-4 border border-dark">.col-md-4</div>
                                                <div class="col-md-4 ml-auto border border-dark">.col-md-4
                                                    .ml-auto</div>
                                            </div>
                                            <div class="row border border-dark mt-3">
                                                <div class="col-md-3 ml-auto border border-dark">.col-md-3
                                                    .ml-auto</div>
                                                <div class="col-md-2 ml-auto border border-dark">.col-md-2
                                                    .ml-auto</div>
                                            </div>
                                            <div class="row border border-dark mt-3">
                                                <div class="col-md-6 ml-auto border border-dark">.col-md-6
                                                    .ml-auto</div>
                                            </div>
                                            <div class="row border border-dark mt-3">
                                                <div class="col-sm-9 border border-dark">
                                                    Level 1: .col-sm-9
                                                    <div class="row">
                                                        <div class="col-8 col-sm-6 border border-dark">
                                                            Level 2: .col-8 .col-sm-6
                                                        </div>
                                                        <div class="col-4 col-sm-6 border border-dark">
                                                            Level 2: .col-4 .col-sm-6
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <img src="../../assets/images/alert/model.png" alt="default" data-toggle="modal"
                             data-target="#grid-modal" class="model_img img-fluid" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Modal based on trigger button</h4>
                        <!-- sample modal content -->
                        <div class="button-box">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                                    data-whatever="@mdo">Open modal for @mdo</button>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"
                                    data-whatever="@fat">Open modal for @fat</button>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"
                                    data-whatever="@getbootstrap">Open modal for @getbootstrap</button>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel1">New message</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Recipient:</label>
                                                <input type="text" class="form-control" id="recipient-name1">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="control-label">Message:</label>
                                                <textarea class="form-control" id="message-text1"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Send message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal -->
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
@endpush