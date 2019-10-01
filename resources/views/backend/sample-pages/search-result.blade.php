@extends('backend.layouts.app')
@section('title') {{ 'Search Result | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Search Result'])
@endsection

@push('before-css')
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Search Result For "Angular Js"</h4>
                        <h6 class="card-subtitle">About 14,700 result ( 0.10 seconds)</h6>
                        <ul class="search-listing list-style-none">
                            <li class="border-bottom">
                                <h4 class="m-b-0"><a href="javacript:void(0)" class="text-cyan font-medium p-0">AngularJs</a></h4>
                                <a href="javascript:void(0)" class="search-links p-0 text-success">http://www.google.com/angularjs</a>
                                <p>Lorem Ipsum viveremus probamus opus apeirian haec perveniri,
                                    memoriter.Praebeat pecunias viveremus probamus opus apeirian haec
                                    perveniri, memoriter.</p>
                            </li>
                            <li class="border-bottom p-t-15">
                                <h4 class="m-b-0"><a href="javacript:void(0)" class="text-cyan font-medium p-0">AngularJS
                                        — Superheroic JavaScript MVW Framework</a></h4>
                                <a href="javascript:void(0)" class="search-links p-0 text-success">http://www.google.com/angularjs</a>
                                <p>Lorem Ipsum viveremus probamus opus apeirian haec perveniri,
                                    memoriter.Praebeat pecunias viveremus probamus opus apeirian haec
                                    perveniri, memoriter.</p>
                            </li>
                            <li class="border-bottom p-t-15">
                                <h4 class="m-b-0"><a href="javacript:void(0)" class="text-cyan font-medium p-0">AngularJS
                                        Tutorial - W3Schools</a></h4>
                                <a href="javascript:void(0)" class="search-links p-0 text-success">http://www.google.com/angularjs</a>
                                <p>Lorem Ipsum viveremus probamus opus apeirian haec perveniri,
                                    memoriter.Praebeat pecunias viveremus probamus opus apeirian haec
                                    perveniri, memoriter.</p>
                            </li>
                            <li class="border-bottom p-t-15">
                                <h4 class="m-b-0"><a href="javacript:void(0)" class="text-cyan font-medium p-0">Introduction
                                        to AngularJS - W3Schools</a></h4>
                                <a href="javascript:void(0)" class="search-links p-0 text-success">http://www.google.com/angularjs</a>
                                <p>Lorem Ipsum viveremus probamus opus apeirian haec perveniri,
                                    memoriter.Praebeat pecunias viveremus probamus opus apeirian haec
                                    perveniri, memoriter.</p>
                            </li>
                            <li class="border-bottom p-t-15">
                                <h4 class="m-b-0"><a href="javacript:void(0)" class="text-cyan font-medium p-0">AngularJS
                                        Tutorial</a></h4>
                                <a href="javascript:void(0)" class="search-links p-0 text-success">http://www.google.com/angularjs</a>
                                <p>Lorem Ipsum viveremus probamus opus apeirian haec perveniri,
                                    memoriter.Praebeat pecunias viveremus probamus opus apeirian haec
                                    perveniri, memoriter.</p>
                            </li>
                            <li class="p-t-15">
                                <h4 class="m-b-0"><a href="javacript:void(0)" class="text-cyan font-medium p-0">Angular
                                        2: One framework.</a></h4>
                                <a href="javascript:void(0)" class="search-links p-0 text-success">http://www.google.com/angularjs</a>
                                <p>Lorem Ipsum viveremus probamus opus apeirian haec perveniri,
                                    memoriter.Praebeat pecunias viveremus probamus opus apeirian haec
                                    perveniri, memoriter.</p>
                            </li>
                        </ul>
                        <nav aria-label="Page navigation example" class="m-t-40">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="javascript:void(0)" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">Next</a>
                                </li>
                            </ul>
                        </nav>
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
@endpush

