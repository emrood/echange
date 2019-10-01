@extends('backend.layouts.app')
@section('title') {{ 'Tooltip & Popover | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Tooltip & Popover'])
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Interactive demo</h4>
                        <h6 class="card-subtitle">Just put this to any tag <code>data-toggle="tooltip" title="Default tooltip"</code></h6>
                        <div class="button-box">
                            <button type="button" class="btn btn-secondary btn-outline" data-toggle="tooltip"
                                    data-placement="top" title="Tooltip on top">Tooltip on top</button>
                            <button type="button" class="btn btn-secondary btn-outline" data-toggle="tooltip"
                                    data-placement="right" title="" data-original-title="Tooltip on right">Tooltip
                                on right</button>
                            <button type="button" class="btn btn-secondary btn-outline" data-toggle="tooltip"
                                    data-placement="bottom" title="" data-original-title="Tooltip on bottom">Tooltip
                                on bottom</button>
                            <button type="button" class="btn btn-secondary btn-outline" data-toggle="tooltip"
                                    data-placement="left" title="" data-original-title="Tooltip on left">Tooltip on
                                left</button>
                            <pre class="language-html scrollable">
                                        <code>
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-outline&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Tooltip on top&quot;&gt;Tooltip on top&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-outline&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;right&quot; title=&quot;&quot; data-original-title=&quot;Tooltip on right&quot;&gt;Tooltip on right&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-outline&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;bottom&quot; title=&quot;&quot; data-original-title=&quot;Tooltip on bottom&quot;&gt;Tooltip on bottom&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-outline&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;left&quot; title=&quot;&quot; data-original-title=&quot;Tooltip on left&quot;&gt;Tooltip on left&lt;/button&gt;
                                        </code>
                                    </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Interactive demo</h4>
                        <h6 class="card-subtitle">Just put this to any tag <code>data-container="body" title="Popover title" data-toggle="popover" data-placement="top" data-content="..."</code></h6>
                        <div class="button-box">
                            <button type="button" class="btn btn-secondary" data-container="body" title="Popover title"
                                    data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on top
                            </button>
                            <button type="button" class="btn btn-secondary" data-container="body" title="Popover title"
                                    data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on right
                            </button>
                            <button type="button" class="btn btn-secondary" data-container="body" title="Popover title"
                                    data-toggle="popover" data-placement="bottom" data-content="Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on bottom
                            </button>
                            <button type="button" class="btn btn-secondary" data-container="body" title="Popover title"
                                    data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on left
                            </button>
                        </div>
                        <pre class="language-html scrollable">
                                    <code>
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-container=&quot;body&quot; title=&quot;Popover title&quot; data-toggle=&quot;popover&quot; data-placement=&quot;top&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;
                                            Popover on top
                                        &lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-container=&quot;body&quot; title=&quot;Popover title&quot; data-toggle=&quot;popover&quot; data-placement=&quot;right&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;
                                            Popover on right
                                        &lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-container=&quot;body&quot; title=&quot;Popover title&quot; data-toggle=&quot;popover&quot; data-placement=&quot;bottom&quot; data-content=&quot;Vivamus
                                            sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;
                                            Popover on bottom
                                        &lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-container=&quot;body&quot; title=&quot;Popover title&quot; data-toggle=&quot;popover&quot; data-placement=&quot;left&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;
                                            Popover on left
                                        &lt;/button&gt;
                                    </code>
                                </pre>
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
