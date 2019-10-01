@extends('backend.layouts.app')
@section('title') {{ 'Cards | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Cards'])
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
        <!-- Row -->
        <div class="row">
            <div class="col-12">
                <h4 class="d-inline">Card with Image</h4>
                <p class="text-muted m-t-0">For the code click on above code icon</p>
                <!-- Row -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="https://via.placeholder.com/890x593?text=Image"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and
                                    make up the bulk of the card's content.</p>
                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="https://via.placeholder.com/890x593?text=Image"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and
                                    make up the bulk of the card's content.</p>
                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="https://via.placeholder.com/890x593?text=Image"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and
                                    make up the bulk of the card's content.</p>
                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6 img-responsive">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="https://via.placeholder.com/890x593?text=Image"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and
                                    make up the bulk of the card's content.</p>
                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                </div>
                <!-- Row -->
                <pre class="language-html scrollable">
                            <code>
                                &lt;!-- Card --&gt;
                                &lt;div class=&quot;card&quot;&gt;
                                    &lt;img class=&quot;card-img-top img-responsive&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;Card image cap&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
                                        &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;!-- Card --&gt;
                            </code>
                        </pre>
            </div>
        </div>
        <!-- End Row -->
        <!-- Row -->
        <div class="row">
            <div class="col-12 m-t-30">
                <h4 class="m-b-0">Content types</h4>
                <p class="text-muted m-t-0">The building block of a card is the <code>.card</code>
                    <code>.card-body</code>
                    Use it whenever you need a padded section within a card.</p>
                <div class="card">
                    <div class="card-body collapse show">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                    </div>
                </div>
            </div>
        </div>
        <pre class="language-html scrollable">
                    <code>
                         &lt;div class=&quot;card&quot;&gt;
                            &lt;div class=&quot;card-body collapse show&quot;&gt;
                                &lt;h4 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h4&gt;
                                &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    </code>
                </pre>
        <!-- End Row -->
        <!-- Row -->
        <div class="row">
            <div class="col-12 m-t-30">
                <h4 class="m-b-0">Titles, text, and links</h4>
                <p class="text-muted m-t-0">Card titles are used by adding <code>.card-title</code> &amp; <code>.card-subtitle</code>
                    for subtitle of card.</p>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <h5 class="card-subtitle mb-2 text-muted">Card subtitle</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <a href="javascript:void(0)" class="card-link">Card link</a>
                        <a href="javascript:void(0)" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
        <pre class="language-html scrollable">
                    <code>
                        &lt;div class=&quot;card&quot;&gt;
                            &lt;div class=&quot;card-body&quot;&gt;
                                &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
                                &lt;h6 class=&quot;card-subtitle mb-2 text-muted&quot;&gt;Card subtitle&lt;/h6&gt;
                                &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
                                &lt;a href=&quot;javascript:void(0)&quot; class=&quot;card-link&quot;&gt;Card link&lt;/a&gt;
                                &lt;a href=&quot;javascript:void(0)&quot; class=&quot;card-link&quot;&gt;Another link&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    </code>
                </pre>
        <!-- End Row -->
        <!-- Row -->
        <div class="row">
            <div class="col-12 m-t-30">
                <h4 class="m-b-0">Header and footer</h4>
                <p class="text-muted m-t-0 font-12">Add an optional header and/or footer within a card.</p>
                <!-- Card -->
                <div class="card">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <!-- Card -->
            </div>
        </div>
        <pre class="language-html scrollable">
                    <code>
                        &lt;!-- Card --&gt;
                        &lt;div class=&quot;card&quot;&gt;
                            &lt;div class=&quot;card-header&quot;&gt;
                                Featured
                            &lt;/div&gt;
                            &lt;div class=&quot;card-body&quot;&gt;
                                &lt;h4 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h4&gt;
                                &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;!-- Card --&gt;
                    </code>
                </pre>
        <!-- End Row -->
        <!-- Row -->
        <div class="row">
            <div class="col-12 m-t-30">
                <h4 class="m-b-0">Header and footer</h4>
                <p class="text-muted m-t-0 font-12">Add an optional header and/or footer within a card.</p>
                <!-- Card -->
                <div class="card text-center">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-info">Go somewhere</a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>
                <!-- Card -->
            </div>
        </div>
        <pre class="language-html scrollable">
                    <code>
                        &lt;!-- Card --&gt;
                        &lt;div class=&quot;card text-center&quot;&gt;
                            &lt;div class=&quot;card-header&quot;&gt;
                                Featured
                            &lt;/div&gt;
                            &lt;div class=&quot;card-body&quot;&gt;
                                &lt;h4 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h4&gt;
                                &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-info&quot;&gt;Go somewhere&lt;/a&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;card-footer text-muted&quot;&gt;
                                2 days ago
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;!-- Card --&gt;
                    </code>
                </pre>
        <!-- End Row -->
        <!-- Row -->
        <div class="row">
            <div class="col-12 m-t-30">
                <h4 class="m-b-0">Size Using grid markup</h4>
                <p class="text-muted m-t-0 font-12">Using the grid, wrap cards in columns and rows as needed.<code>.col-1
                        to .col-12</code></p>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Special title treatment</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-success">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Special title treatment</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <pre class="language-html scrollable">
                    <code>
                        &lt;div class=&quot;card&quot;&gt;
                            &lt;div class=&quot;card-body&quot;&gt;
                                &lt;h3 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h3&gt;
                                &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-success&quot;&gt;Go somewhere&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    </code>
                </pre>
        <!-- End Row -->
        <!-- Row -->
        <div class="row">
            <div class="col-12 m-t-30">
                <h4 class="m-b-0">Text alignment</h4>
                <p class="text-muted m-t-0 font-12">You can quickly change the text alignment<code>.text-center
                        .text-right</code>.</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-info">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-right">
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-inverse">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                        <pre class="language-html scrollable">
                            <code>
                                &lt;div class=&quot;card&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h4 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h4&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                        &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-info&quot;&gt;Go somewhere&lt;/a&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
            </div>
            <div class="col-md-4">
                        <pre class="language-html scrollable">
                            <code>
                                &lt;div class=&quot;card text-center&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h4 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h4&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                        &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
            </div>
            <div class="col-md-4">
                        <pre class="language-html scrollable">
                            <code>
                                &lt;div class=&quot;card text-right&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h4 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h4&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                        &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-inverse&quot;&gt;Go somewhere&lt;/a&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
            </div>
        </div>
        <!-- End Row -->
        <!-- Row -->
        <div class="row">
            <div class="col-12 m-t-30">
                <h4 class="m-b-0">Using utilities</h4>
                <p class="text-muted m-t-0 font-12">Using the utility, you can give direct width class to card
                    like<code>.w-25, w-50, w-75, w-100</code></p>
                <div class="card w-75">
                    <div class="card-body">
                        <h3 class="card-title">This card has width of 75%</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-danger">Go somewhere</a>
                    </div>
                </div>
                <div class="card w-50">
                    <div class="card-body">
                        <h3 class="card-title">This card has width of 50%</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <pre class="language-html scrollable">
                    <code>
                        &lt;div class=&quot;card w-75&quot;&gt;
                            &lt;div class=&quot;card-body&quot;&gt;
                                &lt;h3 class=&quot;card-title&quot;&gt;This card has width of 75%&lt;/h3&gt;
                                &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-danger&quot;&gt;Go somewhere&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;card w-50&quot;&gt;
                            &lt;div class=&quot;card-body&quot;&gt;
                                &lt;h3 class=&quot;card-title&quot;&gt;This card has width of 50%&lt;/h3&gt;
                                &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;                       
                    </code>
                </pre>
        <!-- End Row -->
        <!-- Row -->
        <div class="row">
            <div class="col-12 m-t-30">
                <h4 class="m-b-0">Size Using grid markup</h4>
                <p class="text-muted m-t-0 font-12">Using the grid, wrap cards in columns and rows as needed.<code>.col-1
                        to .col-12</code></p>
            </div>
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="javascript:void(0)">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="javascript:void(0)">Disabled</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-inverse">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="javascript:void(0)">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="javascript:void(0)">Disabled</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-info">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                        <pre class="language-html scrollable">
                            <code>
                                &lt;div class=&quot;card text-center&quot;&gt;
                                    &lt;div class=&quot;card-header&quot;&gt;
                                        &lt;ul class=&quot;nav nav-tabs card-header-tabs&quot;&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a class=&quot;nav-link active&quot; href=&quot;javascript:void(0)&quot;&gt;Active&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a class=&quot;nav-link&quot; href=&quot;javascript:void(0)&quot;&gt;Link&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a class=&quot;nav-link disabled&quot; href=&quot;javascript:void(0)&quot;&gt;Disabled&lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h4 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h4&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                        &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-inverse&quot;&gt;Go somewhere&lt;/a&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
            </div>
            <div class="col-md-6">
                        <pre class="language-html scrollable">
                            <code>
                                &lt;div class=&quot;card text-center&quot;&gt;
                                    &lt;div class=&quot;card-header&quot;&gt;
                                        &lt;ul class=&quot;nav nav-pills card-header-pills&quot;&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a class=&quot;nav-link active&quot; href=&quot;javascript:void(0)&quot;&gt;Active&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a class=&quot;nav-link&quot; href=&quot;javascript:void(0)&quot;&gt;Link&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                &lt;a class=&quot;nav-link disabled&quot; href=&quot;javascript:void(0)&quot;&gt;Disabled&lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h4 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h4&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                        &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-info&quot;&gt;Go somewhere&lt;/a&gt;
                                    &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;                              
                            </code>
                        </pre>
            </div>
        </div>
        <!-- End Row -->
        <!-- Row -->
        <div class="row">
            <div class="col-12 m-t-30">
                <h4 class="m-b-0">Card styles</h4>
                <p class="text-muted m-t-0 font-12">Cards include various options for customizing their
                    backgrounds, borders, and color.<code>.card-primary info, warning, danger</code></p>
            </div>
            <div class="col-md-6">
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Card Title</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Special title treatment</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-white bg-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Card Title</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Special title treatment</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-dark">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Code of Cards -->
        <div class="row">
            <div class="col-md-6">
                        <pre class="language-html scrollable">
                                <code>
                                    &lt;div class=&quot;card text-white bg-dark&quot;&gt;
                                        &lt;div class=&quot;card-header&quot;&gt;
                                            &lt;h4 class=&quot;m-b-0 text-white&quot;&gt;Card Title&lt;/h4&gt;&lt;/div&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h3 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h3&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                            &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;                            
                                </code>
                            </pre>
            </div>
            <div class="col-md-6">
                        <pre class="language-html scrollable">
                                <code>
                                    &lt;div class=&quot;card text-white bg-info&quot;&gt;
                                        &lt;div class=&quot;card-header&quot;&gt;
                                            &lt;h4 class=&quot;m-b-0 text-white&quot;&gt;Card Title&lt;/h4&gt;&lt;/div&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h3 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h3&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                            &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-dark&quot;&gt;Go somewhere&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;   
                                </code>
                            </pre>
            </div>
        </div>
        <div class="row m-t-30">
            <div class="col-md-6">
                <div class="card text-white bg-primary">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Card Title</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Special title treatment</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-dark">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-white bg-danger">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Card Title</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Special title treatment</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-dark">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Code of cards -->
        <div class="row">
            <div class="col-md-6">
                        <pre class="language-html scrollable">
                                <code>
                                    &lt;div class=&quot;card text-white bg-primary&quot;&gt;
                                        &lt;div class=&quot;card-header&quot;&gt;
                                            &lt;h4 class=&quot;m-b-0 text-white&quot;&gt;Card Title&lt;/h4&gt;&lt;/div&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h3 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h3&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                            &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-dark&quot;&gt;Go somewhere&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
            </div>
            <div class="col-md-6">
                        <pre class="language-html scrollable">
                                <code>
                                    &lt;div class=&quot;card text-white bg-danger&quot;&gt;
                                        &lt;div class=&quot;card-header&quot;&gt;
                                            &lt;h4 class=&quot;m-b-0 text-white&quot;&gt;Card Title&lt;/h4&gt;&lt;/div&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h3 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h3&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                            &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-dark&quot;&gt;Go somewhere&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
            </div>
        </div>
        <div class="row m-t-30">
            <div class="col-md-6">
                <div class="card text-white bg-warning">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Card Title</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Special title treatment</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-dark">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-white bg-success">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Card Title</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Special title treatment</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-dark">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Code of cards -->
        <div class="row">
            <div class="col-md-6">
                        <pre class="language-html scrollable">
                                <code>
                                    &lt;div class=&quot;card text-white bg-warning&quot;&gt;
                                        &lt;div class=&quot;card-header&quot;&gt;
                                            &lt;h4 class=&quot;m-b-0 text-white&quot;&gt;Card Title&lt;/h4&gt;&lt;/div&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h3 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h3&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                            &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-dark&quot;&gt;Go somewhere&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
            </div>
            <div class="col-md-6">
                        <pre class="language-html scrollable">
                                <code>
                                    &lt;div class=&quot;card text-white bg-success&quot;&gt;
                                        &lt;div class=&quot;card-header&quot;&gt;
                                            &lt;h4 class=&quot;m-b-0 text-white&quot;&gt;Card Title&lt;/h4&gt;&lt;/div&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h3 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h3&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                            &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-dark&quot;&gt;Go somewhere&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
            </div>
        </div>
        <!-- End Row -->
        <!-- Row -->
        <div class="row">
            <div class="col-12 m-t-30">
                <h4 class="m-b-0">Card styles</h4>
                <p class="text-muted m-t-0 font-12">Cards include various options for customizing their
                    backgrounds, borders, and color.<code>.card-primary info, warning, danger</code></p>
            </div>
            <div class="col-md-6">
                <div class="card border-dark">
                    <div class="card-header bg-dark">
                        <h4 class="m-b-0 text-white">Card Title</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Special title treatment</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-info">
                    <div class="card-header bg-info">
                        <h4 class="m-b-0 text-white">Card Title</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Special title treatment</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-inverse">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- code of cards -->
        <div class="row">
            <div class="col-md-6">
                        <pre class="language-html scrollable">
                                <code>
                                    &lt;div class=&quot;card border-dark&quot;&gt;
                                        &lt;div class=&quot;card-header bg-dark&quot;&gt;
                                            &lt;h4 class=&quot;m-b-0 text-white&quot;&gt;Card Title&lt;/h4&gt;&lt;/div&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h3 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h3&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                            &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
            </div>
            <div class="col-md-6">
                        <pre class="language-html scrollable">
                                <code>
                                    &lt;div class=&quot;card border-info&quot;&gt;
                                        &lt;div class=&quot;card-header bg-info&quot;&gt;
                                            &lt;h4 class=&quot;m-b-0 text-white&quot;&gt;Card Title&lt;/h4&gt;&lt;/div&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h3 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h3&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                            &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-inverse&quot;&gt;Go somewhere&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
            </div>
        </div>
        <div class="row m-t-30">
            <div class="col-md-6">
                <div class="card border-primary">
                    <div class="card-header bg-primary">
                        <h4 class="m-b-0 text-white">Card Title</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Special title treatment</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-inverse">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-danger">
                    <div class="card-header bg-danger">
                        <h4 class="m-b-0 text-white">Card Title</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Special title treatment</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-inverse">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- code of cards -->
        <div class="row">
            <div class="col-md-6">
                        <pre class="language-html scrollable">
                                <code>
                                    &lt;div class=&quot;card border-primary&quot;&gt;
                                        &lt;div class=&quot;card-header bg-primary&quot;&gt;
                                            &lt;h4 class=&quot;m-b-0 text-white&quot;&gt;Card Title&lt;/h4&gt;&lt;/div&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h3 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h3&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                            &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-inverse&quot;&gt;Go somewhere&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
            </div>
            <div class="col-md-6">
                        <pre class="language-html scrollable">
                                <code>
                                     &lt;div class=&quot;card border-danger&quot;&gt;
                                        &lt;div class=&quot;card-header bg-danger&quot;&gt;
                                            &lt;h4 class=&quot;m-b-0 text-white&quot;&gt;Card Title&lt;/h4&gt;&lt;/div&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h3 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h3&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                            &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-inverse&quot;&gt;Go somewhere&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
            </div>
        </div>
        <div class="row m-t-30">
            <div class="col-md-6">
                <div class="card border-warning">
                    <div class="card-header bg-warning">
                        <h4 class="m-b-0 text-white">Card Title</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Special title treatment</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-inverse">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-success">
                    <div class="card-header bg-success">
                        <h4 class="m-b-0 text-white">Card Title</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Special title treatment</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="javascript:void(0)" class="btn btn-inverse">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- code of cards -->
        <div class="row">
            <div class="col-md-6">
                        <pre class="language-html scrollable">
                                <code>
                                    &lt;div class=&quot;card border-warning&quot;&gt;
                                        &lt;div class=&quot;card-header bg-warning&quot;&gt;
                                            &lt;h4 class=&quot;m-b-0 text-white&quot;&gt;Card Title&lt;/h4&gt;&lt;/div&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h3 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h3&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                            &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-inverse&quot;&gt;Go somewhere&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
            </div>
            <div class="col-md-6">
                        <pre class="language-html scrollable">
                                <code>
                                    &lt;div class=&quot;card border-success&quot;&gt;
                                        &lt;div class=&quot;card-header bg-success&quot;&gt;
                                            &lt;h4 class=&quot;m-b-0 text-white&quot;&gt;Card Title&lt;/h4&gt;&lt;/div&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h3 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h3&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                            &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-inverse&quot;&gt;Go somewhere&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
            </div>
        </div>
        <!-- End Row -->
        <!-- Row -->
        <div class="row">
            <div class="col-12 m-t-30">
                <h4 class="m-b-0">Card Groups</h4>
                <p class="text-muted m-t-0 font-12">Use card groups to render cards as a single, attached
                    element with equal width and height columns.</p>
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top img-responsive" src="https://via.placeholder.com/890x593?text=Image"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-responsive" src="https://via.placeholder.com/890x593?text=Image"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-responsive" src="https://via.placeholder.com/890x593?text=Image"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This card has even longer content than the first
                                to show that equal height action.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- code of cards -->
            <div class="col-12">
                        <pre class="language-html scrollable">
                            <code>
                                &lt;div class=&quot;card-group&quot;&gt;
                                    &lt;div class=&quot;card&quot;&gt;
                                        &lt;img class=&quot;card-img-top img-responsive&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;Card image cap&quot;&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;&lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;card&quot;&gt;
                                        &lt;img class=&quot;card-img-top img-responsive&quot; src=&quot;../../assets/images/big/img2.jpg&quot; alt=&quot;Card image cap&quot;&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;This card has supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;&lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;card&quot;&gt;
                                        &lt;img class=&quot;card-img-top img-responsive&quot; src=&quot;../../assets/images/big/img3.jpg&quot; alt=&quot;Card image cap&quot;&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.&lt;/p&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;&lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
            </div>
        </div>
        <!-- End Row -->
        <h4 class="m-t-40">Card With action</h4>
        <p class="text-muted m-t-0 font-12">With action elements.</p>
        <div class="card">
            <div class="card-header">
                Title
                <div class="card-actions">
                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                </div>
            </div>
            <div class="card-body collapse show">
                <h4 class="card-title">Special title treatment</h4>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                        <pre class="language-html scrollable">
                            <code>
                                &lt;div class=&quot;card&quot;&gt;
                                    &lt;div class=&quot;card-header&quot;&gt;
                                        Title
                                        &lt;div class=&quot;card-actions&quot;&gt;
                                            &lt;a class=&quot;&quot; data-action=&quot;collapse&quot;&gt;&lt;i class=&quot;ti-minus&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                            &lt;a class=&quot;btn-minimize&quot; data-action=&quot;expand&quot;&gt;&lt;i class=&quot;mdi mdi-arrow-expand&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                            &lt;a class=&quot;btn-close&quot; data-action=&quot;close&quot;&gt;&lt;i class=&quot;ti-close&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;card-body collapse show&quot;&gt;
                                        &lt;h4 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h4&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;                                
                            </code>
                        </pre>
            </div>
        </div>
        <!-- Row -->
        <div class="row">
            <div class="col-12 m-t-30">
                <h4 class="m-b-0">Card with Deck</h4>
                <p class="text-muted m-t-0 font-12">Use card groups to render cards as a single, attached
                    element with equal width and height columns.</p>
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top img-responsive" src="https://via.placeholder.com/890x593?text=Image"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-responsive" src="https://via.placeholder.com/890x593?text=Image"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This card has supporting text below as a natural.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-responsive" src="https://via.placeholder.com/890x593?text=Image"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This card has even longer content than the first
                                to show that equal height action. supporting text below as a natural lead-in to
                                additional content</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                        <pre class="language-html scrollable">
                            <code>
                                &lt;div class=&quot;card&quot;&gt;
                                    &lt;img class=&quot;card-img-top img-responsive&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;Card image cap&quot;&gt;
                                    &lt;div class=&quot;card-body&quot;&gt;
                                        &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
                                        &lt;p class=&quot;card-text&quot;&gt;&lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
            </div>
        </div>
        <!-- End Row -->
        <!-- Row -->
        <div class="row">
            <div class="col-12 m-t-30">
                <h4 class="m-b-0">Card columns</h4>
                <p class="text-muted m-t-0 font-12">Cards can be organized into Masonry-like columns with just
                    CSS by wrapping them in <code>card-columns</code></p>
                <div class="card-columns">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="https://via.placeholder.com/890x593?text=Image"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title that wraps to a new line</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card p-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                            ante.</p>
                        <footer>
                            <small class="text-muted">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-fluid" src="https://via.placeholder.com/890x593?text=Image"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                    <div class="card bg-primary p-3 text-center text-white">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                        <footer>
                            <small>
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                    </div>
                    <div class="card text-center">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img img-fluid" src="https://via.placeholder.com/890x593?text=Image" alt="Card image">
                    </div>
                    <div class="card p-3 text-right">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                            ante.</p>
                        <footer>
                            <small class="text-muted">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This card has even longer content than the first
                                to show that equal height action.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                        <pre class="language-html scrollable">
                            <code>
                                &lt;div class=&quot;card-columns&quot;&gt;
                                    &lt;div class=&quot;card&quot;&gt;
                                        &lt;img class=&quot;card-img-top img-fluid&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;Card image cap&quot;&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h4 class=&quot;card-title&quot;&gt;Card title that wraps to a new line&lt;/h4&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;card p-3&quot;&gt;
                                        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
                                        &lt;footer&gt;
                                            &lt;small class=&quot;text-muted&quot;&gt;
                                      Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
                                    &lt;/small&gt;
                                        &lt;/footer&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;card&quot;&gt;
                                        &lt;img class=&quot;card-img-top img-fluid&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;Card image cap&quot;&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;This card has supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;&lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;card bg-primary p-3 text-center text-white&quot;&gt;
                                        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.&lt;/p&gt;
                                        &lt;footer&gt;
                                            &lt;small&gt;
                                                Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
                                            &lt;/small&gt;
                                        &lt;/footer&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;card text-center&quot;&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;This card has supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;&lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;card&quot;&gt;
                                        &lt;img class=&quot;card-img img-fluid&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;Card image&quot;&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;card p-3 text-right&quot;&gt;
                                        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
                                        &lt;footer&gt;
                                            &lt;small class=&quot;text-muted&quot;&gt;
                                      Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
                                    &lt;/small&gt;
                                        &lt;/footer&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;card&quot;&gt;
                                        &lt;div class=&quot;card-body&quot;&gt;
                                            &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.&lt;/p&gt;
                                            &lt;p class=&quot;card-text&quot;&gt;&lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
            </div>
        </div>
        <!-- End Row -->
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



