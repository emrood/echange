@extends('backend.layouts.app')
@section('title') {{ 'Treeview | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Treeview'])
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
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <h4 class="card-title">Default</h4>
                                <div id="treeview1"></div>
                            </div>
                            <div class="col-md-4 col-12">
                                <h4 class="card-title">Collapsed</h4>
                                <div id="treeview2"></div>
                            </div>
                            <div class="col-md-4 col-12">
                                <h4 class="card-title">Tags as Badges</h4>
                                <div id="treeview3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <h4 class="card-title">Blue Theme</h4>
                                <div id="treeview4"></div>
                            </div>
                            <div class="col-md-4 col-12">
                                <h4 class="card-title">Custom Icons</h4>
                                <div id="treeview5"></div>
                            </div>
                            <div class="col-md-4 col-12">
                                <h4 class="card-title">Expanded</h4>
                                <div id="treeview6"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Searchable Tree</h4>
                        <div class="row">
                            <div class="col-sm-4">
                                <h5>Input</h5>
                                <!-- <form> -->
                                <div class="form-group">
                                    <label for="input-search" class="sr-only">Search Tree:</label>
                                    <input type="text" class="form-control" id="input-search" placeholder="Type to search...">
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="chk-ignore-case">
                                    <label class="custom-control-label" for="chk-ignore-case">Ignore Case</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="chk-exact-match">
                                    <label class="custom-control-label" for="chk-exact-match">Exact Match</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="chk-reveal-results">
                                    <label class="custom-control-label" for="chk-reveal-results">Reveal Results</label>
                                </div>
                                <button type="button" class="btn btn-success m-t-20" id="btn-search">Search</button>
                                <button type="button" class="btn btn-danger m-t-20" id="btn-clear-search">Clear</button>
                                <!-- </form> -->
                            </div>
                            <div class="col-sm-4">
                                <h5>Tree</h5>
                                <div id="treeview-searchable"></div>
                            </div>
                            <div class="col-sm-4">
                                <h5>Results</h5>
                                <div id="search-output"></div>
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
    <script src="{{asset('assets/extra-libs/treeview/dist/bootstrap-treeview.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/treeview/dist/bootstrap-treeview-init.js')}}"></script>
@endpush

