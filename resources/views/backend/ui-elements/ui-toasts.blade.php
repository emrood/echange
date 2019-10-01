@extends('backend.layouts.app')
@section('title') {{ 'Toasts | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Toasts'])
@endsection

@push('after-css')
    <!-- This Page CSS -->
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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic Toast</h4>
                        <div class="bg-light p-3">
                            <div class="toast" role="alert" data-autohide="false" aria-live="assertive"
                                 aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                         preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                        <rect fill="#007aff" width="100%" height="100%"></rect>
                                    </svg>
                                    <strong class="mr-auto">Bootstrap</strong>
                                    <small>11 mins ago</small>
                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="toast-body">
                                    Hello, world! This is a toast message.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Translucent</h4>
                        <div class="bg-light p-3">
                            <div class="toast" role="alert" data-autohide="false" aria-live="assertive"
                                 aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                         preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                        <rect fill="#007aff" width="100%" height="100%"></rect>
                                    </svg>
                                    <strong class="mr-auto">Bootstrap</strong>
                                    <small class="text-muted">11 mins ago</small>
                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="toast-body">
                                    Hello, world! This is a toast message.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Stacking</h4>
                        <div class="bg-light p-3">
                            <div class="toast" role="alert" data-autohide="false" aria-live="assertive"
                                 aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                         preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                        <rect fill="#007aff" width="100%" height="100%"></rect>
                                    </svg>
                                    <strong class="mr-auto">Bootstrap</strong>
                                    <small class="text-muted">just now</small>
                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="toast-body">
                                    See? Just like this.
                                </div>
                            </div>

                            <div class="toast" role="alert" data-autohide="false" aria-live="assertive"
                                 aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                         preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                        <rect fill="#007aff" width="100%" height="100%"></rect>
                                    </svg>
                                    <strong class="mr-auto">Bootstrap</strong>
                                    <small class="text-muted">2 seconds ago</small>
                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="toast-body">
                                    Heads up, toasts will stack automatically
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Placement</h4>
                        <div class="bg-light p-2">
                            <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
                                <div class="toast" data-autohide="false" style="position: absolute; top: 0; right: 0;">
                                    <div class="toast-header">
                                        <svg class="bd-placeholder-img rounded mr-2" width="20" height="20"
                                             xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                             focusable="false" role="img">
                                            <rect fill="#007aff" width="100%" height="100%"></rect>
                                        </svg>
                                        <strong class="mr-auto">Bootstrap</strong>
                                        <small>11 mins ago</small>
                                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                                aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="toast-body">
                                        Hello, world! This is a toast message.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Placement</h4>
                        <div class="bg-light p-2">
                            <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
                                <!-- Position it -->
                                <div style="position: absolute; top: 0; right: 0;">

                                    <!-- Then put toasts within -->
                                    <div class="toast" role="alert" data-autohide="false" aria-live="assertive"
                                         aria-atomic="true">
                                        <div class="toast-header">
                                            <svg class="bd-placeholder-img rounded mr-2" width="20" height="20"
                                                 xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                                 focusable="false" role="img">
                                                <rect fill="#007aff" width="100%" height="100%"></rect>
                                            </svg>
                                            <strong class="mr-auto">Bootstrap</strong>
                                            <small class="text-muted">just now</small>
                                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="toast-body">
                                            See? Just like this.
                                        </div>
                                    </div>

                                    <div class="toast" role="alert" data-autohide="false" aria-live="assertive"
                                         aria-atomic="true">
                                        <div class="toast-header">
                                            <svg class="bd-placeholder-img rounded mr-2" width="20" height="20"
                                                 xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                                 focusable="false" role="img">
                                                <rect fill="#007aff" width="100%" height="100%"></rect>
                                            </svg>
                                            <strong class="mr-auto">Bootstrap</strong>
                                            <small class="text-muted">2 seconds ago</small>
                                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="toast-body">
                                            Heads up, toasts will stack automatically
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Placement with Flexbox</h4>
                        <div class="bg-light p-2">
                            <!-- Flexbox container for aligning the toasts -->
                            <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center"
                                 style="min-height: 200px;">

                                <!-- Then put toasts within -->
                                <div class="toast" role="alert" data-autohide="false" aria-live="assertive"
                                     aria-atomic="true">
                                    <div class="toast-header">
                                        <svg class="bd-placeholder-img rounded mr-2" width="20" height="20"
                                             xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                             focusable="false" role="img">
                                            <rect fill="#007aff" width="100%" height="100%"></rect>
                                        </svg>
                                        <strong class="mr-auto">Bootstrap</strong>
                                        <small>11 mins ago</small>
                                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                                aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="toast-body">
                                        Hello, world! This is a toast message.
                                    </div>
                                </div>
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
    <script type="text/javascript">
        $('.toast').toast('show');
    </script>
@endpush

