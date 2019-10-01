@extends('backend.layouts.app')
@section('title') {{ 'Breadcrumb | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Breadcrumb'])
@endsection

@push('after-css')
    <!-- This Page CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/prism/prism.css')}}">

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
                        <h4 class="card-title">Default bootstrap breadcrumb</h4>
                        <h6 class="card-subtitle">use class <code>.breadcrumb to ol</code></h6>
                        <ol class="breadcrumb m-b-10">
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                        <pre class="language-html scrollable">
                                    <code>
                                        &lt;ol class=&quot;breadcrumb m-b-10&quot;&gt;
                                            &lt;li class=&quot;breadcrumb-item active&quot;&gt;Home&lt;/li&gt;
                                        &lt;/ol&gt;
                                    </code>
                                </pre>
                        <ol class="breadcrumb m-b-10">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Library</li>
                        </ol>
                        <ol class="breadcrumb m-b-10">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Library</a></li>
                            <li class="breadcrumb-item active">Data</li>
                        </ol>
                        <br>
                        <br>
                        <h4 class="card-title">Nav breadcrumb</h4>
                        <h6 class="card-subtitle">use class <code>.breadcrumb to nav</code> similar to
                            navigation</h6>
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="javascript:void(0)">Home</a>
                            <a class="breadcrumb-item" href="javascript:void(0)">Library</a>
                            <a class="breadcrumb-item" href="javascript:void(0)">Data</a>
                            <span class="breadcrumb-item active">Bootstrap</span>
                        </nav>
                        <pre class="language-html scrollable">
                                    <code>
                                         &lt;nav class=&quot;breadcrumb&quot;&gt;
                                            &lt;a class=&quot;breadcrumb-item&quot; href=&quot;javascript:void(0)&quot;&gt;Home&lt;/a&gt;
                                            &lt;a class=&quot;breadcrumb-item&quot; href=&quot;javascript:void(0)&quot;&gt;Library&lt;/a&gt;
                                            &lt;a class=&quot;breadcrumb-item&quot; href=&quot;javascript:void(0)&quot;&gt;Data&lt;/a&gt;
                                            &lt;span class=&quot;breadcrumb-item active&quot;&gt;Bootstrap&lt;/span&gt;
                                        &lt;/nav&gt;
                                    </code>
                                </pre>
                        <br>
                        <br>
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
    <script src="{{asset('assets/extra-libs/prism/prism.js')}}"></script>
@endpush

