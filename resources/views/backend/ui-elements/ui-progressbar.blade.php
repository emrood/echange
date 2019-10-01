@extends('backend.layouts.app')
@section('title') {{ 'Progressbar | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Progressbar'])
@endsection

@push('after-css')
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
            <!-- column -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Default Progress bars <a class="get-code" data-toggle="collapse"
                                                                        href="#pgr1" aria-expanded="true"><i class="fa fa-code" title="Get Code"
                                                                                                             data-toggle="tooltip"></i></a></h4>
                        <div class="collapse m-t-15" id="pgr1">
                            <pre class="language-html scrollable"><code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar bg-danger " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"&gt; &lt;span class="sr-only"&gt;50% Complete&lt;/span&gt;&lt;/div&gt;<br/>&lt;/div&gt;</code></pre>
                        </div>
                        <div class="progress m-t-30">
                            <div class="progress-bar bg-danger" style="width: 60%; height:6px;" role="progressbar">
                                <span class="sr-only">60% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Default Progress bars <a class="get-code" data-toggle="collapse"
                                                                        href="#pgr2" aria-expanded="true"><i class="fa fa-code" title="Get Code"
                                                                                                             data-toggle="tooltip"></i></a></h4>
                        <div class="collapse m-t-15" id="pgr2">
                            <pre class="language-html scrollable"><code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%;height:15px;" role="progressbar""&gt; 75% &lt;/div&gt;<br/>&lt;/div&gt;</code></pre>
                        </div>
                        <div class="progress m-t-20">
                            <div class="progress-bar bg-success" style="width: 75%; height:15px;" role="progressbar">75%</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Striped Progress bar <a class="get-code" data-toggle="collapse"
                                                                       href="#pgr3" aria-expanded="true"><i class="fa fa-code" title="Get Code"
                                                                                                            data-toggle="tooltip"></i></a></h4>
                        <div class="collapse m-t-15" id="pgr3">
                            <pre class="language-html scrollable"><code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar bg-info progress-bar-striped" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%;height:10px;"&gt; &lt;span class="sr-only"&gt;85% Complete&lt;/span&gt;&lt;/div&gt;<br/>&lt;/div&gt;</code></pre>
                        </div>
                        <div class="progress m-t-20">
                            <div class="progress-bar bg-info progress-bar-striped" aria-valuenow="85"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 85%; height:10px;" role="progressbar">
                                <span class="sr-only">85% Complete (success)</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 p-r-40 m-t-30 m-b-30">
                                <h4 class="card-title">Colored bars</h4>
                                <h6 class="card-subtitle">you can create any colors you want</h6>
                                <div class="progress m-t-30">
                                    <div class="progress-bar bg-danger" style="width: 60%; height:6px;" role="progressbar">
                                        <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <div class="progress m-t-30">
                                    <div class="progress-bar bg-info" style="width: 40%; height:6px;" role="progressbar">
                                        <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <div class="progress m-t-30">
                                    <div class="progress-bar bg-success" style="width: 20%; height:6px;" role="progressbar">
                                        <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <div class="progress m-t-30">
                                    <div class="progress-bar bg-primary" style="width: 30%; height:6px;" role="progressbar">
                                        <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <div class="progress m-t-30">
                                    <div class="progress-bar bg-warning" style="width: 80%; height:6px;" role="progressbar">
                                        <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <div class="progress m-t-30">
                                    <div class="progress-bar bg-inverse" style="width: 40%; height:6px;" role="progressbar">
                                        <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-4 p-r-40 m-t-30 m-b-30">
                                <h4 class="card-title">Different bar sizes </h4>
                                <h6 class="card-subtitle">you can create any size you want just give height to
                                    bar</h6>
                                <div class="progress m-t-30">
                                    <div class="progress-bar bg-danger" style="width: 60%; height:6px;" role="progressbar">
                                        <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <div class="progress m-t-30">
                                    <div class="progress-bar bg-info" style="width: 40%; height:8px;" role="progressbar">
                                        <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <div class="progress m-t-30">
                                    <div class="progress-bar bg-success" style="width: 20%; height:10px;" role="progressbar">
                                        <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <div class="progress m-t-30">
                                    <div class="progress-bar bg-primary" style="width: 30%; height:12px;" role="progressbar">
                                        <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <div class="progress m-t-30">
                                    <div class="progress-bar bg-warning" style="width: 80%; height:14px;" role="progressbar">
                                        <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-4 p-r-40 m-t-30 m-b-30">
                                <h4 class="card-title">Animated Striped bar </h4>
                                <h6 class="card-subtitle">You can also use animated bar by just putting <code>active</code>
                                    class</h6>
                                <div class="progress m-t-30">
                                    <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                                         style="width: 60%; height:6px;" role="progressbar"> <span class="sr-only">60%
                                                    Complete</span> </div>
                                </div>
                                <div class="progress m-t-30">
                                    <div class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                                         style="width: 40%; height:8px;" role="progressbar"> <span class="sr-only">60%
                                                    Complete</span> </div>
                                </div>
                                <div class="progress m-t-30">
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                                         style="width: 20%; height:10px;" role="progressbar"> <span class="sr-only">60%
                                                    Complete</span> </div>
                                </div>
                                <div class="progress m-t-30">
                                    <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated"
                                         style="width: 30%; height:12px;" role="progressbar"> <span class="sr-only">60%
                                                    Complete</span> </div>
                                </div>
                                <div class="progress m-t-30">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated"
                                         style="width: 80%; height:14px;" role="progressbar"> <span class="sr-only">60%
                                                    Complete</span> </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-4 p-r-40 m-t-30 m-b-30">
                                        <pre class="language-html scrollable">
                                                <code>
                                                    &lt;div class=&quot;progress m-t-30&quot;&gt;
                                                        &lt;div class=&quot;progress-bar bg-danger&quot; style=&quot;width: 60%; height:6px;&quot; role=&quot;progressbar&quot;&gt; &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt; &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;progress m-t-30&quot;&gt;
                                                        &lt;div class=&quot;progress-bar bg-info&quot; style=&quot;width: 40%; height:6px;&quot; role=&quot;progressbar&quot;&gt; &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt; &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;progress m-t-30&quot;&gt;
                                                        &lt;div class=&quot;progress-bar bg-success&quot; style=&quot;width: 20%; height:6px;&quot; role=&quot;progressbar&quot;&gt; &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt; &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;progress m-t-30&quot;&gt;
                                                        &lt;div class=&quot;progress-bar bg-primary&quot; style=&quot;width: 30%; height:6px;&quot; role=&quot;progressbar&quot;&gt; &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt; &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;progress m-t-30&quot;&gt;
                                                        &lt;div class=&quot;progress-bar bg-warning&quot; style=&quot;width: 80%; height:6px;&quot; role=&quot;progressbar&quot;&gt; &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt; &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;progress m-t-30&quot;&gt;
                                                        &lt;div class=&quot;progress-bar bg-inverse&quot; style=&quot;width: 40%; height:6px;&quot; role=&quot;progressbar&quot;&gt; &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt; &lt;/div&gt;
                                                    &lt;/div&gt;
                                                </code>
                                            </pre>
                            </div>
                            <div class="col-md-4 p-r-40 m-t-30 m-b-30">
                                        <pre class="language-html scrollable">
                                                <code>
                                                    &lt;div class=&quot;progress m-t-30&quot;&gt;
                                                        &lt;div class=&quot;progress-bar bg-danger&quot; style=&quot;width: 60%; height:6px;&quot; role=&quot;progressbar&quot;&gt; &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt; &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;progress m-t-30&quot;&gt;
                                                        &lt;div class=&quot;progress-bar bg-info&quot; style=&quot;width: 40%; height:8px;&quot; role=&quot;progressbar&quot;&gt; &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt; &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;progress m-t-30&quot;&gt;
                                                        &lt;div class=&quot;progress-bar bg-success&quot; style=&quot;width: 20%; height:10px;&quot; role=&quot;progressbar&quot;&gt; &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt; &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;progress m-t-30&quot;&gt;
                                                        &lt;div class=&quot;progress-bar bg-primary&quot; style=&quot;width: 30%; height:12px;&quot; role=&quot;progressbar&quot;&gt; &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt; &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;progress m-t-30&quot;&gt;
                                                        &lt;div class=&quot;progress-bar bg-warning&quot; style=&quot;width: 80%; height:14px;&quot; role=&quot;progressbar&quot;&gt; &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt; &lt;/div&gt;
                                                    &lt;/div&gt;
                                                </code>
                                            </pre>
                            </div>
                            <div class="col-md-4 p-r-40 m-t-30 m-b-30">
                                        <pre class="language-html scrollable">
                                                <code>
                                                    &lt;div class=&quot;progress m-t-30&quot;&gt;
                                                        &lt;div class=&quot;progress-bar bg-danger progress-bar-striped progress-bar-animated&quot; style=&quot;width: 60%; height:6px;&quot; role=&quot;progressbar&quot;&gt; &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt; &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;progress m-t-30&quot;&gt;
                                                        &lt;div class=&quot;progress-bar bg-info progress-bar-striped progress-bar-animated&quot; style=&quot;width: 40%; height:8px;&quot; role=&quot;progressbar&quot;&gt; &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt; &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;progress m-t-30&quot;&gt;
                                                        &lt;div class=&quot;progress-bar bg-success progress-bar-striped progress-bar-animated&quot; style=&quot;width: 20%; height:10px;&quot; role=&quot;progressbar&quot;&gt; &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt; &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;progress m-t-30&quot;&gt;
                                                        &lt;div class=&quot;progress-bar bg-primary progress-bar-striped progress-bar-animated&quot; style=&quot;width: 30%; height:12px;&quot; role=&quot;progressbar&quot;&gt; &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt; &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;progress m-t-30&quot;&gt;
                                                        &lt;div class=&quot;progress-bar bg-warning progress-bar-striped progress-bar-animated&quot; style=&quot;width: 80%; height:14px;&quot; role=&quot;progressbar&quot;&gt; &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt; &lt;/div&gt;
                                                    &lt;/div&gt;
                                                </code>
                                            </pre>
                            </div>
                            <!-- Column -->
                            <div class="col-md-4 p-r-40 m-t-30 m-b-30">
                                <h4 class="card-title">Skill Bars </h4>
                                <h6 class="card-subtitle">you can create animated skill bar if you want just
                                    put <code>wow animated progress-animated</code></h6>
                                <h5 class="m-t-30">Photoshop<span class="pull-right">85%</span></h5>
                                <div class="progress ">
                                    <div class="progress-bar bg-danger wow animated progress-animated" style="width: 85%; height:6px;"
                                         role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <h5 class="m-t-30">Code editor<span class="pull-right">90%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-info wow animated progress-animated" style="width: 90%; height:6px;"
                                         role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <h5 class="m-t-30">Illustrator<span class="pull-right">65%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-success wow animated progress-animated" style="width: 65%; height:6px;"
                                         role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-4 p-r-40 m-t-30 m-b-30">
                                <h4 class="card-title">&nbsp;</h4>
                                <h6 class="card-subtitle">&nbsp;</h6>
                                <h5 class="m-t-30">Dreamweaver<span class="pull-right">85%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-primary wow animated progress-animated" style="width: 85%; height:6px;"
                                         role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <h5 class="m-t-30">Coral Draw<span class="pull-right">45%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-warning wow animated progress-animated" style="width: 45%; height:6px;"
                                         role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <h5 class="m-t-30">Sketch<span class="pull-right">25%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-inverse wow animated progress-animated" style="width: 25%; height:6px;"
                                         role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-12">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;!-- SKILL BARS --&gt;
                                                &lt;div class=&quot;progress &quot;&gt;
                                                    &lt;div class=&quot;progress-bar bg-danger wow animated progress-animated&quot; style=&quot;width: 85%; height:6px;&quot; role=&quot;progressbar&quot;&gt; &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt; &lt;/div&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
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
    <script src="{{asset('assets/extra-libs/prism/prism.js')}}"></script>
@endpush
