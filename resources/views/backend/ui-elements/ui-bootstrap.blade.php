@extends('backend.layouts.app')
@section('title') {{ 'Bootstrap | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Bootstrap'])
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
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <h4 class="card-title">Badges</h4>
                                <h6 class="card-subtitle">Use class <code>.badge</code> and for colors <code>badge-success</code>
                                    for get desire badge.</h6>
                                <h1>Example heading <span class="badge badge-secondary">New</span></h1>
                                <h2>Example heading <span class="badge badge-success">New</span></h2>
                                <h3>Example heading <span class="badge badge-info">New</span></h3>
                                <h4>Example heading <span class="badge badge-primary">New</span></h4>
                                <h5>Example heading <span class="badge badge-danger">New</span></h5>
                                <h6>Example heading <span class="badge badge-warning">New</span></h6>
                            </div>
                            <div class="col-lg-3 mb-4">
                                <h4 class="card-title">Contextual Badge variations</h4>
                                <h6 class="card-subtitle">Use class <code>.badge</code> and for colors <code>badge-success</code>
                                    for get desire badge.</h6>
                                <span class="badge badge-secondary">Default</span>
                                <br />
                                <span class="badge badge-primary">Primary</span>
                                <br />
                                <span class="badge badge-success">Success</span>
                                <br />
                                <span class="badge badge-info">Info</span>
                                <br />
                                <span class="badge badge-warning">Warning</span>
                                <br />
                                <span class="badge badge-danger">Danger</span>
                            </div>
                            <div class="col-lg-3 mb-4">
                                <h4 class="card-title">Pill badges</h4>
                                <h6 class="card-subtitle">Use class <code>.badge-pill</code> and for colors
                                    <code>badge-success</code> for get desire badge.</h6>
                                <span class="badge badge-pill badge-secondary">Default</span>
                                <br />
                                <span class="badge badge-pill badge-primary">Primary</span>
                                <br />
                                <span class="badge badge-pill badge-success">Success</span>
                                <br />
                                <span class="badge badge-pill badge-info">Info</span>
                                <br />
                                <span class="badge badge-pill badge-warning">Warning</span>
                                <br />
                                <span class="badge badge-pill badge-danger">Danger</span>
                            </div>
                            <div class="col-lg-6">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;h1&gt;Example heading &lt;span class=&quot;badge badge-default&quot;&gt;New&lt;/span&gt;&lt;/h1&gt;
                                                &lt;h2&gt;Example heading &lt;span class=&quot;badge badge-success&quot;&gt;New&lt;/span&gt;&lt;/h2&gt;
                                                &lt;h3&gt;Example heading &lt;span class=&quot;badge badge-info&quot;&gt;New&lt;/span&gt;&lt;/h3&gt;
                                                &lt;h4&gt;Example heading &lt;span class=&quot;badge badge-primary&quot;&gt;New&lt;/span&gt;&lt;/h4&gt;
                                                &lt;h5&gt;Example heading &lt;span class=&quot;badge badge-danger&quot;&gt;New&lt;/span&gt;&lt;/h5&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-3">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;span class=&quot;badge badge-default&quot;&gt;Default&lt;/span&gt;
                                                &lt;span class=&quot;badge badge-primary&quot;&gt;Primary&lt;/span&gt;
                                                &lt;span class=&quot;badge badge-success&quot;&gt;Success&lt;/span&gt;
                                                &lt;span class=&quot;badge badge-info&quot;&gt;Info&lt;/span&gt;
                                                &lt;span class=&quot;badge badge-warning&quot;&gt;Warning&lt;/span&gt;
                                                &lt;span class=&quot;badge badge-danger&quot;&gt;Danger&lt;/span&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-3">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;span class=&quot;badge badge-pill badge-default&quot;&gt;Default&lt;/span&gt;
                                                &lt;span class=&quot;badge badge-pill badge-primary&quot;&gt;Primary&lt;/span&gt;
                                                &lt;span class=&quot;badge badge-pill badge-success&quot;&gt;Success&lt;/span&gt;
                                                &lt;span class=&quot;badge badge-pill badge-info&quot;&gt;Info&lt;/span&gt;
                                                &lt;span class=&quot;badge badge-pill badge-warning&quot;&gt;Warning&lt;/span&gt;
                                                &lt;span class=&quot;badge badge-pill badge-danger&quot;&gt;Danger&lt;/span&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-md-6">
                                <h4 class="card-title mt-3">Badges</h4>
                                <button type="button" class="btn btn-primary">
                                    Notifications <span class="badge badge-light">4</span>
                                </button>
                                <button type="button" class="btn btn-primary">
                                    Profile <span class="badge badge-light">9</span>
                                    <span class="sr-only">unread messages</span>
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h4 class="card-title mt-3">Contextual variations</h4>
                                <span class="badge badge-primary">Primary</span>
                                <span class="badge badge-secondary">Secondary</span>
                                <span class="badge badge-success">Success</span>
                                <span class="badge badge-danger">Danger</span>
                                <span class="badge badge-warning">Warning</span>
                                <span class="badge badge-info">Info</span>
                                <span class="badge badge-light">Light</span>
                                <span class="badge badge-dark">Dark</span>
                                <h4 class="card-title mt-3">Pill badges</h4>
                                <span class="badge badge-pill badge-primary">Primary</span>
                                <span class="badge badge-pill badge-secondary">Secondary</span>
                                <span class="badge badge-pill badge-success">Success</span>
                                <span class="badge badge-pill badge-danger">Danger</span>
                                <span class="badge badge-pill badge-warning">Warning</span>
                                <span class="badge badge-pill badge-info">Info</span>
                                <span class="badge badge-pill badge-light">Light</span>
                                <span class="badge badge-pill badge-dark">Dark</span>
                            </div>
                            <div class="col-12">
                                <br>
                                <br>
                                <hr>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-5 mb-4">
                                <h4 class="card-title">Collapse (Toggle)</h4>
                                <h6 class="card-subtitle">click below button, for Use a link with the <code>href</code>
                                    attribute, with class <code>.collapse</code> get desire toggle.</h6>
                                <p>
                                    <a class="btn btn-info" data-toggle="collapse" href="#collapseExample"
                                       aria-expanded="false" aria-controls="collapseExample">
                                        Link with href
                                    </a>
                                    <button class="btn btn-success" type="button" data-toggle="collapse"
                                            data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        Button with data-target
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                        terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer
                                        labore wes anderson cred nesciunt sapiente ea proident.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1">
                                <h4 class="card-title">Accordion example</h4>
                                <h6 class="card-subtitle">Extend the default collapse behavior to create an
                                    accordion.</h6>
                                <div id="accordian-3">
                                    <div class="card">
                                        <a class="card-header" id="heading11">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1"
                                                    aria-expanded="true" aria-controls="collapse1">
                                                <h5 class="mb-0">Accordion Example 1</h5>
                                            </button>
                                        </a>
                                        <div id="collapse1" class="collapse show" aria-labelledby="heading11"
                                             data-parent="#accordian-3">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                                laboris nisi ut aliquip ex ea commodo consequat.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <a class="card-header" id="heading22">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                <h5 class="mb-0">Accordion Example 2</h5>
                                            </button>
                                        </a>
                                        <div id="collapse2" class="collapse" aria-labelledby="heading22"
                                             data-parent="#accordian-3">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                                laboris nisi ut aliquip ex ea commodo consequat.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <a class="card-header" id="heading33">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                <h5 class="mb-0">Accordion Example 3</h5>
                                            </button>
                                        </a>
                                        <div id="collapse3" class="collapse" aria-labelledby="heading33"
                                             data-parent="#accordian-3">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                                laboris nisi ut aliquip ex ea commodo consequat.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                        <pre class="language-html scrollable">
                                            <code>
                                                 &lt;p&gt;
                                                    &lt;a class=&quot;btn btn-info&quot; data-toggle=&quot;collapse&quot; href=&quot;#collapseExample&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
                                                Link with href
                                                &lt;/a&gt;
                                                    &lt;button class=&quot;btn btn-success&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#collapseExample&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
                                                        Button with data-target
                                                    &lt;/button&gt;
                                                &lt;/p&gt;
                                                &lt;div class=&quot;collapse&quot; id=&quot;collapseExample&quot;&gt;
                                                    &lt;div class=&quot;card card-body&quot;&gt;
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-6 offset-lg-1">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div id=&quot;accordion2&quot; class=&quot;accordion&quot; role=&quot;tablist&quot; aria-multiselectable=&quot;true&quot;&gt;
                                                    &lt;div class=&quot;card&quot;&gt;
                                                        &lt;div class=&quot;card-header&quot; role=&quot;tab&quot; id=&quot;headingOne&quot;&gt;
                                                            &lt;h5 class=&quot;mb-0&quot;&gt;
                                                                &lt;a data-toggle=&quot;collapse&quot; data-parent=&quot;#accordion2&quot; href=&quot;#collapse1&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;
                                                                  Collapsible Group Item #1
                                                                &lt;/a&gt;
                                                              &lt;/h5&gt;
                                                        &lt;/div&gt;
                                                        &lt;div id=&quot;collapse1&quot; class=&quot;collapse show&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;headingOne&quot;&gt;
                                                            &lt;div class=&quot;card-body&quot;&gt;
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;card&quot;&gt;
                                                        &lt;div class=&quot;card-header&quot; role=&quot;tab&quot; id=&quot;headingTwo&quot;&gt;
                                                            &lt;h5 class=&quot;mb-0&quot;&gt;
                                                                &lt;a class=&quot;collapsed&quot; data-toggle=&quot;collapse&quot; data-parent=&quot;#accordion2&quot; href=&quot;#collapse2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;
                                                                  Collapsible Group Item #2
                                                                &lt;/a&gt;
                                                              &lt;/h5&gt;
                                                        &lt;/div&gt;
                                                        &lt;div id=&quot;collapse2&quot; class=&quot;collapse&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;headingTwo&quot;&gt;
                                                            &lt;div class=&quot;card-body&quot;&gt;
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;card&quot;&gt;
                                                        &lt;div class=&quot;card-header&quot; role=&quot;tab&quot; id=&quot;headingThree&quot;&gt;
                                                            &lt;h5 class=&quot;mb-0&quot;&gt;
                                                                &lt;a class=&quot;collapsed&quot; data-toggle=&quot;collapse&quot; data-parent=&quot;#accordion2&quot; href=&quot;#collapse3&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseThree&quot;&gt;
                                                                  Collapsible Group Item #3
                                                                &lt;/a&gt;
                                                              &lt;/h5&gt;
                                                        &lt;/div&gt;
                                                        &lt;div id=&quot;collapse3&quot; class=&quot;collapse&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;headingThree&quot;&gt;
                                                            &lt;div class=&quot;card-body&quot;&gt;
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-12">
                                <br>
                                <br>
                                <hr>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <h4 class="card-title">Label Example</h4>
                                <h6 class="card-subtitle">Use class <code>.label </code> for get desire text.</h6>
                                <h1>Example heading <span class="label label-inverse">New</span></h1>
                                <h2>Example heading <span class="label label-success">New</span></h2>
                                <h3>Example heading <span class="label label-info">New</span></h3>
                                <h4>Example heading <span class="label label-primary">New</span></h4>
                                <h5>Example heading <span class="label label-danger">New</span></h5>
                                <h6>Example heading <span class="label label-warning">New</span></h6>
                            </div>
                            <div class="col-lg-3 mb-4">
                                <h4 class="card-title">Contextual Label variations</h4>
                                <h6 class="card-subtitle">Use class <code>.label</code> and for colors <code>label-success</code>
                                    for get desire label.</h6>
                                <span class="label label-inverse">Default</span>
                                <br>
                                <span class="label label-primary">Primary</span>
                                <br>
                                <span class="label label-success">Success</span>
                                <br>
                                <span class="label label-info">Info</span>
                                <br>
                                <span class="label label-warning">Warning</span>
                                <br>
                                <span class="label label-danger">Danger</span>
                            </div>
                            <div class="col-lg-3 mb-4">
                                <h4 class="card-title">Label rounded</h4>
                                <h6 class="card-subtitle">Use class <code>.label .label-rounded</code> and for
                                    colors <code>label-success</code> for get desire label.</h6>
                                <span class="label label-rounded label-inverse">Default</span>
                                <br>
                                <span class="label label-rounded label-primary">Primary</span>
                                <br>
                                <span class="label label-rounded label-success">Success</span>
                                <br>
                                <span class="label label-rounded label-info">Info</span>
                                <br>
                                <span class="label label-rounded label-warning">Warning</span>
                                <br>
                                <span class="label label-rounded label-danger">Danger</span>
                            </div>
                            <div class="col-lg-6">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;h1&gt;Example heading &lt;span class=&quot;label label-inverse&quot;&gt;New&lt;/span&gt;&lt;/h1&gt;
                                                &lt;h2&gt;Example heading &lt;span class=&quot;label label-success&quot;&gt;New&lt;/span&gt;&lt;/h2&gt;
                                                &lt;h3&gt;Example heading &lt;span class=&quot;label label-info&quot;&gt;New&lt;/span&gt;&lt;/h3&gt;
                                                &lt;h4&gt;Example heading &lt;span class=&quot;label label-primary&quot;&gt;New&lt;/span&gt;&lt;/h4&gt;
                                                &lt;h5&gt;Example heading &lt;span class=&quot;label label-danger&quot;&gt;New&lt;/span&gt;&lt;/h5&gt;
                                                &lt;h6&gt;Example heading &lt;span class=&quot;label label-warning&quot;&gt;New&lt;/span&gt;&lt;/h6&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-3">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;span class=&quot;label label-inverse&quot;&gt;Default&lt;/span&gt; &lt;span class=&quot;label label-light-inverse&quot;&gt;Default&lt;/span&gt;
                                                &lt;span class=&quot;label label-primary&quot;&gt;Primary&lt;/span&gt; &lt;span class=&quot;label label-light-primary&quot;&gt;Primary&lt;/span&gt;
                                                &lt;span class=&quot;label label-success&quot;&gt;Success&lt;/span&gt; &lt;span class=&quot;label label-light-success&quot;&gt;Success&lt;/span&gt;
                                                &lt;span class=&quot;label label-info&quot;&gt;Info&lt;/span&gt; &lt;span class=&quot;label label-light-info&quot;&gt;Info&lt;/span&gt;
                                                &lt;span class=&quot;label label-warning&quot;&gt;Warning&lt;/span&gt; &lt;span class=&quot;label label-light-warning&quot;&gt;Warning&lt;/span&gt;
                                                &lt;span class=&quot;label label-danger&quot;&gt;Danger&lt;/span&gt; &lt;span class=&quot;label label-light-danger&quot;&gt;Danger&lt;/span&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-3">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;span class=&quot;label label-rounded label-inverse&quot;&gt;Default&lt;/span&gt;
                                                &lt;span class=&quot;label label-rounded label-primary&quot;&gt;Primary&lt;/span&gt;
                                                &lt;span class=&quot;label label-rounded label-success&quot;&gt;Success&lt;/span&gt;
                                                &lt;span class=&quot;label label-rounded label-info&quot;&gt;Info&lt;/span&gt;
                                                &lt;span class=&quot;label label-rounded label-warning&quot;&gt;Warning&lt;/span&gt;
                                                &lt;span class=&quot;label label-rounded label-danger&quot;&gt;Danger&lt;/span&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-12">
                                <br>
                                <br>
                                <hr>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <h4 class="card-title">Simple pagination</h4>
                                <h6 class="card-subtitle">To make pagination give class <code>pagination</code>
                                    to ul</h6>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <h4 class="card-title">Working with icons</h4>
                                <h6 class="card-subtitle">To make pagination give class <code>pagination</code>
                                    to ul</h6>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <h4 class="card-title">Disabled and active states</h4>
                                <h6 class="card-subtitle">To make pagination active or disable give class <code>.disabled & .active</code>
                                    to ul</h6>
                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript:void(0)" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="javascript:void(0)">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0)">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                 &lt;nav aria-label=&quot;Page navigation example&quot;&gt;
                                                    &lt;ul class=&quot;pagination&quot;&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/nav&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;nav aria-label=&quot;Page navigation example&quot;&gt;
                                                    &lt;ul class=&quot;pagination&quot;&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;
                                                            &lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot; aria-label=&quot;Previous&quot;&gt;
                                                                &lt;span aria-hidden=&quot;true&quot;&gt;&laquo;&lt;/span&gt;
                                                                &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
                                                            &lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;
                                                            &lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot; aria-label=&quot;Next&quot;&gt;
                                                                &lt;span aria-hidden=&quot;true&quot;&gt;&raquo;&lt;/span&gt;
                                                                &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
                                                            &lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/nav&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;nav aria-label=&quot;...&quot;&gt;
                                                    &lt;ul class=&quot;pagination&quot;&gt;
                                                        &lt;li class=&quot;page-item disabled&quot;&gt;
                                                            &lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot; tabindex=&quot;-1&quot;&gt;Previous&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li class=&quot;page-item active&quot;&gt;
                                                            &lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;2 &lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt;&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;
                                                            &lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;Next&lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/nav&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-12">
                                <br>
                                <br>
                                <hr>
                                <br>
                                <br>
                            </div>
                            <div class="col-12">
                                <h4 class="card-title">Sizing</h4>
                                <h6 class="card-subtitle">Fancy larger or smaller pagination? Add<code>.pagination-sm </code>
                                    for additional sizes.</h6>
                                <nav aria-label="...">
                                    <ul class="pagination pagination-sm">
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
                                <div class="mt-3">
                                            <pre class="language-html scrollable">
                                            <code>
                                                &lt;nav aria-label=&quot;...&quot;&gt;
                                                    &lt;ul class=&quot;pagination pagination-lg&quot;&gt;
                                                        &lt;li class=&quot;page-item disabled&quot;&gt;
                                                            &lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot; tabindex=&quot;-1&quot;&gt;Previous&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;
                                                            &lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;Next&lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/nav&gt;
                                            </code>
                                        </pre>
                                </div>
                            </div>
                            <div class="col-12">
                                <h4 class="card-title">Alignment</h4>
                                <h6 class="card-subtitle">Change the alignment of pagination components with
                                    felxbox <code>justify-content-center, justify-content-end, </code></h6>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
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
                                <div class="mt-3">
                                            <pre class="language-html scrollable">
                                            <code>
                                                &lt;nav aria-label=&quot;Page navigation example&quot;&gt;
                                                    &lt;ul class=&quot;pagination justify-content-center&quot;&gt;
                                                        &lt;li class=&quot;page-item disabled&quot;&gt;
                                                            &lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot; tabindex=&quot;-1&quot;&gt;Previous&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;
                                                            &lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;Next&lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/nav&gt;
                                            </code>
                                        </pre>
                                </div>
                            </div>
                            <div class="col-12">
                                <h4 class="card-title">Sizing</h4>
                                <h6 class="card-subtitle">Fancy larger or smaller pagination? Add<code>.pagination-lg </code>
                                    for additional sizes.</h6>
                                <nav aria-label="...">
                                    <ul class="pagination pagination-lg">
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
                                <div class="mt-3">
                                            <pre class="language-html scrollable">
                                            <code>
                                                &lt;nav aria-label=&quot;...&quot;&gt;
                                                    &lt;ul class=&quot;pagination pagination-sm&quot;&gt;
                                                        &lt;li class=&quot;page-item disabled&quot;&gt;
                                                            &lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot; tabindex=&quot;-1&quot;&gt;Previous&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li class=&quot;page-item&quot;&gt;
                                                            &lt;a class=&quot;page-link&quot; href=&quot;javascript:void(0)&quot;&gt;Next&lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/nav&gt;
                                            </code>
                                        </pre>
                                </div>
                            </div>
                            <div class="col-12">
                                <br>
                                <br>
                                <hr>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <h4 class="card-title">Image with round corner</h4>
                                <h6 class="card-subtitle"><code>.img-rounded</code></h6>
                                <img src="https://via.placeholder.com/600x600?text=Image" alt="image" class="img-responsive img-rounded"
                                     width="200">
                                <p class="mt-3 mb-0">
                            </div>
                            <div class="col-lg-4 text-center mb-4">
                                <h4 class="card-title">Image with circle</h4>
                                <h6 class="card-subtitle"><code>.img-circle</code> Make sure the image is
                                    square not ractangle</h6>
                                <img src="https://via.placeholder.com/600x600?text=Image" alt="image" class="rounded-circle"
                                     width="290">
                                <p class="mt-3 mb-0">
                            </div>
                            <div class="col-lg-4">
                                <h4 class="card-title">Image with Thumbnail</h4>
                                <h6 class="card-subtitle"><code>img-thumbnail</code></h6>
                                <img src="https://via.placeholder.com/600x600?text=Image" alt="image" class="img-thumbnail"
                                     width="290">
                                <p class="mt-3 mb-0">
                            </div>
                            <div class="col-lg-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;img src=&quot;https://via.placeholder.com/600x600?text=Image&quot; alt=&quot;image&quot; class=&quot;img-responsive img-rounded&quot; width=&quot;200&quot;&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;img src=&quot;https://via.placeholder.com/600x600?text=Image&quot; alt=&quot;image&quot; class=&quot;img-circle&quot; width=&quot;290&quot;&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;img src=&quot;https://via.placeholder.com/600x600?text=Image&quot; alt=&quot;image&quot; class=&quot;img-thumbnail&quot; width=&quot;290&quot;&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-12">
                                <br>
                                <br>
                                <hr>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                                <h4 class="card-title">jumbotron</h4>
                                <h6 class="card-subtitle">A lightweight, flexible component that can optionally
                                    extend the entire viewport to showcase key marketing messages on your site.</h6>
                                <div class="jumbotron">
                                    <h1 class="display-3">Hello, world!</h1>
                                    <p class="lead">This is a simple hero unit, a simple jumbotron-style
                                        component for calling extra attention to featured content or
                                        information.</p>
                                    <hr class="my-4">
                                    <p>It uses utility classes for typography and spacing to space content out
                                        within the larger container.</p>
                                    <p class="lead">
                                        <a class="btn btn-primary btn-lg" href="javascript:void(0)" role="button">Learn
                                            more</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h4 class="card-title">Fluid jumbotron</h4>
                                <h6 class="card-subtitle">To make the jumbotron full width, and without rounded
                                    corners, add the <code>jumbotron-fluid</code></h6>
                                <div class="jumbotron jumbotron-fluid">
                                    <div class="container">
                                        <h1 class="display-3">Fluid jumbotron</h1>
                                        <p class="lead">This is a modified jumbotron that occupies the entire
                                            horizontal space of its parent.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div class=&quot;jumbotron&quot;&gt;
                                                    &lt;h1 class=&quot;display-3&quot;&gt;Hello, world!&lt;/h1&gt;
                                                    &lt;p class=&quot;lead&quot;&gt;This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.&lt;/p&gt;
                                                    &lt;hr class=&quot;my-4&quot;&gt;
                                                    &lt;p&gt;It uses utility classes for typography and spacing to space content out within the larger container.&lt;/p&gt;
                                                    &lt;p class=&quot;lead&quot;&gt;
                                                        &lt;a class=&quot;btn btn-primary btn-lg&quot; href=&quot;javascript:void(0)&quot; role=&quot;button&quot;&gt;Learn more&lt;/a&gt;
                                                    &lt;/p&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-6">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div class=&quot;jumbotron jumbotron-fluid&quot;&gt;
                                                    &lt;div class=&quot;container&quot;&gt;
                                                        &lt;h1 class=&quot;display-3&quot;&gt;Fluid jumbotron&lt;/h1&gt;
                                                        &lt;p class=&quot;lead&quot;&gt;This is a modified jumbotron that occupies the entire horizontal space of its parent.&lt;/p&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-6 mt-4">
                                <h4 class="card-title">Range</h4>
                                <label for="customRange1">Ordinary Range</label>
                                <input type="range" class="custom-range" id="customRange1">
                                <label for="customRange2">Range with Min-Max</label>
                                <input type="range" class="custom-range" min="0" max="5" id="customRange2">
                                <label for="customRange3">Range with Step</label>
                                <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
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
    <!-- This Page JS -->
    <script src="{{asset('assets/extra-libs/prism/prism.js')}}"></script>
@endpush

