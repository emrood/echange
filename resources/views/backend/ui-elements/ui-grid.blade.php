@extends('backend.layouts.app')
@section('title') {{ 'Grid | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Grid'])
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
                        <h4 class="card-title">Grid options</h4>
                        <h6 class="card-subtitle">See how aspects of the Bootstrap grid system work across
                            multiple devices with a handy table. check the <a
                                    href="https://v4-alpha.getbootstrap.com/layout/grid/">official
                                website grid page</a></h6>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped ">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center"> Extra small
                                        <br>
                                        <small>&lt;576px</small>
                                    </th>
                                    <th class="text-center"> Small
                                        <br>
                                        <small>≥576px</small>
                                    </th>
                                    <th class="text-center"> Medium
                                        <br>
                                        <small>≥768px</small>
                                    </th>
                                    <th class="text-center"> Large
                                        <br>
                                        <small>≥992px</small>
                                    </th>
                                    <th class="text-center"> Extra large
                                        <br>
                                        <small>≥1200px</small>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th class="text-nowrap" scope="row">Grid behavior</th>
                                    <td>Horizontal at all times</td>
                                    <td colspan="4">Collapsed to start, horizontal above breakpoints</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Max container width</th>
                                    <td>None (auto)</td>
                                    <td>540px</td>
                                    <td>720px</td>
                                    <td>960px</td>
                                    <td>1140px</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Class prefix</th>
                                    <td><code>.col-</code></td>
                                    <td><code>.col-sm-</code></td>
                                    <td><code>.col-md-</code></td>
                                    <td><code>.col-lg-</code></td>
                                    <td><code>.col-xl-</code></td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row"># of columns</th>
                                    <td colspan="5">12</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Gutter width</th>
                                    <td colspan="5">30px (15px on each side of a column)</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Nestable</th>
                                    <td colspan="5">Yes</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Offsets</th>
                                    <td colspan="5">Yes</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Column ordering</th>
                                    <td colspan="5">Yes</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <p>Grid classes apply to devices with screen widths greater than or equal to the
                            breakpoint sizes, and override grid classes targeted at smaller devices. Therefore,
                            applying any <code>.col-md-</code> class to an element will not only affect its
                            styling on medium devices but also on large devices if a <code>.col-lg-</code>
                            class is not present.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Example: Stacked-to-horizontal</h4>
                        <h6 class="card-subtitle">Using a single set of <code>.col-md-*</code> grid classes,
                            you can create a default grid system that starts out stacked on mobile devices and
                            tablet devices (the extra small to small range) before becoming horizontal on
                            desktop (medium) devices. Place grid columns in any <code>.row</code>.</h6>
                        <div class="row bg-light mb-2 p-10">
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                        </div>
                        <div class="row bg-light mb-2 p-10">
                            <div class="col-md-8">.col-md-8</div>
                            <div class="col-md-4">.col-md-4</div>
                        </div>
                        <div class="row bg-light mb-2 p-10">
                            <div class="col-md-4">.col-md-4</div>
                            <div class="col-md-4">.col-md-4</div>
                            <div class="col-md-4">.col-md-4</div>
                        </div>
                        <div class="row bg-light mb-2 p-10">
                            <div class="col-md-6">.col-md-6</div>
                            <div class="col-md-6">.col-md-6</div>
                        </div>
                        <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-md-8&quot;&gt;.col-md-8&lt;/div&gt;
                                            &lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
                                            &lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
                                            &lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-md-6&quot;&gt;.col-md-6&lt;/div&gt;
                                            &lt;div class=&quot;col-md-6&quot;&gt;.col-md-6&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Example: Mobile and desktop</h4>
                        <h6 class="card-subtitle">Don't want your columns to simply stack in smaller devices?
                            Use the extra small and medium device grid classes by adding <code>.col-xs-*</code>
                            <code>.col-md-*</code> to your columns. See the example below for a better idea of
                            how it all works.</h6>
                        <div class="row bg-light mb-2 p-10">
                            <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                        </div>
                        <div class="row bg-light mb-2 p-10">
                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                        </div>
                        <div class="row bg-light mb-2 p-10">
                            <div class="col-xs-6">.col-xs-6</div>
                            <div class="col-xs-6">.col-xs-6</div>
                        </div>
                        <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-xs-12 col-md-8&quot;&gt;.col-xs-12 .col-md-8&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-xs-6&quot;&gt;.col-xs-6&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6&quot;&gt;.col-xs-6&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Example: Mobile, tablet, desktops</h4>
                        <h6 class="card-subtitle">Build on the previous example by creating even more dynamic
                            and powerful layouts with tablet <code>.col-sm-*</code> classes.</h6>
                        <div class="row bg-light mb-2 p-10">
                            <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                        </div>
                        <div class="row bg-light mb-2 p-10">
                            <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                            <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                            <!-- Optional: clear the XS cols if their content doesn't match in height -->
                            <div class="clearfix visible-xs"></div>
                            <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                        </div>
                        <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row bg-light mb-2 p-10&quot;&gt;
                                            &lt;div class=&quot;col-xs-12 col-sm-6 col-md-8&quot;&gt;.col-xs-12 .col-sm-6 .col-md-8&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-4&quot;&gt;.col-xs-6 .col-sm-4&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-4&quot;&gt;.col-xs-6 .col-sm-4&lt;/div&gt;
                                            &lt;!-- Optional: clear the XS cols if their content doesn't match in height --&gt;
                                            &lt;div class=&quot;clearfix visible-xs&quot;&gt;&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-4&quot;&gt;.col-xs-6 .col-sm-4&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Responsive column resets</h4>
                        <h6 class="card-subtitle">With the four tiers of grids available you're bound to run
                            into issues where, at certain breakpoints, your columns don't clear quite right as
                            one is taller than the other. To fix that, use a combination of a <code>.clearfix</code>
                            and our responsive utility classes.</h6>
                        <div class="row bg-light mb-2 p-10">
                            <div class="col-xs-6 col-sm-3"> .col-xs-6 .col-sm-3
                                <br> Resize your viewport or check it out on your phone for an example.
                            </div>
                            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                            <!-- Add the extra clearfix for only the required viewport -->
                            <div class="clearfix visible-xs"></div>
                            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                        </div>
                        <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row bg-light mb-2 p-10&quot;&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt; .col-xs-6 .col-sm-3
                                                &lt;br&gt; Resize your viewport or check it out on your phone for an example. &lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt;.col-xs-6 .col-sm-3&lt;/div&gt;
                                            &lt;!-- Add the extra clearfix for only the required viewport --&gt;
                                            &lt;div class=&quot;clearfix visible-xs&quot;&gt;&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt;.col-xs-6 .col-sm-3&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt;.col-xs-6 .col-sm-3&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Offsetting columns</h4>
                        <h6 class="card-subtitle">Move columns to the right using <code>.offset-md--*</code>
                            classes. These classes increase the left margin of a column by <code>*</code>
                            columns. For example, <code>.offset-md-4</code> moves <code>.col-md-4</code> over
                            four columns.</h6>
                        <div class="row bg-light mb-2 p-10">
                            <div class="col-md-4">.col-md-4</div>
                            <div class="col-md-4 offset-md-4">.col-md-4 .col-md-offset-4</div>
                        </div>
                        <div class="row bg-light mb-2 p-10">
                            <div class="col-md-3 offset-md-3">.col-md-3 .col-md-offset-3</div>
                            <div class="col-md-3 offset-md-3">.col-md-3 .col-md-offset-3</div>
                        </div>
                        <div class="row bg-light mb-2 p-10">
                            <div class="col-md-6 offset-md-3">.col-md-6 .col-md-offset-3</div>
                        </div>
                        <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row bg-light mb-2 p-10&quot;&gt;
                                            &lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
                                            &lt;div class=&quot;col-md-4 offset-md-4&quot;&gt;.col-md-4 .col-md-offset-4&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row bg-light mb-2 p-10&quot;&gt;
                                            &lt;div class=&quot;col-md-3 offset-md-3&quot;&gt;.col-md-3 .col-md-offset-3&lt;/div&gt;
                                            &lt;div class=&quot;col-md-3 offset-md-3&quot;&gt;.col-md-3 .col-md-offset-3&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row bg-light mb-2 p-10&quot;&gt;
                                            &lt;div class=&quot;col-md-6 offset-md-3&quot;&gt;.col-md-6 .col-md-offset-3&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Gutters</h4>
                        <div class="container px-lg-5">
                            <div class="row mx-lg-n5">
                                <div class="col py-3 px-lg-5 bg-light border">Custom column padding</div>
                                <div class="col py-3 px-lg-5 bg-light border">Custom column padding</div>
                            </div>
                        </div>
                        <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;container px-lg-5&quot;&gt;
                                          &lt;div class=&quot;row mx-lg-n5&quot;&gt;
                                            &lt;div class=&quot;col py-3 px-lg-5 bg-light border&quot;&gt;Custom column padding&lt;/div&gt;
                                            &lt;div class=&quot;col py-3 px-lg-5 bg-light border&quot;&gt;Custom column padding&lt;/div&gt;
                                          &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Order classes</h4>
                        <div class="container">
                            <div class="row">
                                <div class="col bg-light border p-3">
                                    First, but unordered
                                </div>
                                <div class="col order-12 bg-light border p-3">
                                    Second, but last
                                </div>
                                <div class="col order-1 bg-light border p-3">
                                    Third, but first
                                </div>
                            </div>
                        </div>
                        <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;container&quot;&gt;
                                          &lt;div class=&quot;row&quot;&gt;
                                            &lt;div class=&quot;col bg-light border p-3&quot;&gt;
                                              First, but unordered
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col order-12 bg-light border p-3&quot;&gt;
                                              Second, but last
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col order-1 bg-light border p-3&quot;&gt;
                                              Third, but first
                                            &lt;/div&gt;
                                          &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nesting</h4>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-9 bg-light border p-3">
                                    Level 1: .col-sm-9
                                    <div class="row">
                                        <div class="col-8 col-sm-6 bg-light border p-3">
                                            Level 2: .col-8 .col-sm-6
                                        </div>
                                        <div class="col-4 col-sm-6 bg-light border p-3">
                                            Level 2: .col-4 .col-sm-6
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;container&quot;&gt;
                                          &lt;div class=&quot;row&quot;&gt;
                                            &lt;div class=&quot;col-sm-9 bg-light border p-3&quot;&gt;
                                              Level 1: .col-sm-9
                                              &lt;div class=&quot;row&quot;&gt;
                                                &lt;div class=&quot;col-8 col-sm-6 bg-light border p-3&quot;&gt;
                                                  Level 2: .col-8 .col-sm-6
                                                &lt;/div&gt;
                                                &lt;div class=&quot;col-4 col-sm-6 bg-light border p-3&quot;&gt;
                                                  Level 2: .col-4 .col-sm-6
                                                &lt;/div&gt;
                                              &lt;/div&gt;
                                            &lt;/div&gt;
                                          &lt;/div&gt;
                                        &lt;/div&gt;
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
