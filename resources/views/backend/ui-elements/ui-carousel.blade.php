@extends('backend.layouts.app')
@section('title') {{ 'Carousel | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Carousel'])
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
        <!-- row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active"><img class="img-fluid"
                                                                       src="https://via.placeholder.com/890x593?text=Image"
                                                                       alt="First slide"></div>
                                <div class="carousel-item"><img class="img-fluid"
                                                                src="https://via.placeholder.com/890x593?text=Image"
                                                                alt="Second slide"></div>
                                <div class="carousel-item"><img class="img-fluid"
                                                                src="https://via.placeholder.com/890x593?text=Image"
                                                                alt="Third slide"></div>
                            </div>
                        </div>
                        <div class="highlight">
                                    <pre class="language-html scrollable">
                                        <code>
                                            &lt;div id=&quot;carouselExampleSlidesOnly&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;
                                                &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                                                    &lt;div class=&quot;carousel-item active&quot;&gt; &lt;img class=&quot;img-fluid&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;First slide&quot;&gt; &lt;/div&gt;
                                                    &lt;div class=&quot;carousel-item&quot;&gt; &lt;img class=&quot;img-fluid&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;Second slide&quot;&gt; &lt;/div&gt;
                                                    &lt;div class=&quot;carousel-item&quot;&gt; &lt;img class=&quot;img-fluid&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;Third slide&quot;&gt; &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active"><img class="img-fluid"
                                                                       src="https://via.placeholder.com/890x593?text=Image"
                                                                       alt="First slide"></div>
                                <div class="carousel-item"><img class="img-fluid"
                                                                src="https://via.placeholder.com/890x593?text=Image"
                                                                alt="Second slide"></div>
                                <div class="carousel-item"><img class="img-fluid"
                                                                src="https://via.placeholder.com/890x593?text=Image"
                                                                alt="Third slide"></div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                               data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span> </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                               data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span> </a>
                        </div>
                        <div class="highlight">
                                    <pre class="language-html scrollable">
                                        <code>
                                            &lt;div id=&quot;carouselExampleIndicators&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;
                                                &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                                                    &lt;div class=&quot;carousel-item active&quot;&gt; &lt;img class=&quot;img-fluid&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;First slide&quot;&gt; &lt;/div&gt;
                                                    &lt;div class=&quot;carousel-item&quot;&gt; &lt;img class=&quot;img-fluid&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;Second slide&quot;&gt; &lt;/div&gt;
                                                    &lt;div class=&quot;carousel-item&quot;&gt; &lt;img class=&quot;img-fluid&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;Third slide&quot;&gt; &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt; &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt; &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt; &lt;/a&gt;
                                                &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt; &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt; &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt; &lt;/a&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End row -->
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="card-title">With indicators</h4>
                                <h6 class="card-subtitle">You can also add the indicators to the carousel,
                                    alongside the controls, too.</h6>
                                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators2" data-slide-to="0"
                                            class="active"></li>
                                        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="img-fluid" src="https://via.placeholder.com/890x593?text=Image"
                                                 alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="https://via.placeholder.com/890x593?text=Image"
                                                 alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="https://via.placeholder.com/890x593?text=Image"
                                                 alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h4 class="card-title">With captions</h4>
                                <h6 class="card-subtitle">Add captions to your slides easily with the <code>.carousel-caption</code>
                                </h6>
                                <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators3" data-slide-to="0"
                                            class="active"></li>
                                        <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="img-fluid" src="https://via.placeholder.com/890x593?text=Image"
                                                 alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h3 class="text-white">First title goes here</h3>
                                                <p>this is the subcontent you can use this</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="https://via.placeholder.com/890x593?text=Image"
                                                 alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h3 class="text-white">Second title goes here</h3>
                                                <p>this is the subcontent you can use this</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="https://via.placeholder.com/890x593?text=Image"
                                                 alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h3 class="text-white">Third title goes here</h3>
                                                <p>this is the subcontent you can use this</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div id=&quot;carouselExampleIndicators2&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;
                                                    &lt;ol class=&quot;carousel-indicators&quot;&gt;
                                                        &lt;li data-target=&quot;#carouselExampleIndicators2&quot; data-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
                                                        &lt;li data-target=&quot;#carouselExampleIndicators2&quot; data-slide-to=&quot;1&quot;&gt;&lt;/li&gt;
                                                        &lt;li data-target=&quot;#carouselExampleIndicators2&quot; data-slide-to=&quot;2&quot;&gt;&lt;/li&gt;
                                                    &lt;/ol&gt;
                                                    &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                                                        &lt;div class=&quot;carousel-item active&quot;&gt;
                                                            &lt;img class=&quot;img-fluid&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;First slide&quot;&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;carousel-item&quot;&gt;
                                                            &lt;img class=&quot;img-fluid&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;Second slide&quot;&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;carousel-item&quot;&gt;
                                                            &lt;img class=&quot;img-fluid&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;Third slide&quot;&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleIndicators2&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
                                                        &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
                                                    &lt;/a&gt;
                                                    &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleIndicators2&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
                                                        &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
                                                    &lt;/a&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-6">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div id=&quot;carouselExampleIndicators3&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;
                                                    &lt;ol class=&quot;carousel-indicators&quot;&gt;
                                                        &lt;li data-target=&quot;#carouselExampleIndicators3&quot; data-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
                                                        &lt;li data-target=&quot;#carouselExampleIndicators3&quot; data-slide-to=&quot;1&quot;&gt;&lt;/li&gt;
                                                        &lt;li data-target=&quot;#carouselExampleIndicators3&quot; data-slide-to=&quot;2&quot;&gt;&lt;/li&gt;
                                                    &lt;/ol&gt;
                                                    &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                                                        &lt;div class=&quot;carousel-item active&quot;&gt;
                                                            &lt;img class=&quot;img-fluid&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;First slide&quot;&gt;
                                                            &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                                                                &lt;h3 class=&quot;text-white&quot;&gt;First title goes here&lt;/h3&gt;
                                                                &lt;p&gt;this is the subcontent you can use this&lt;/p&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;carousel-item&quot;&gt;
                                                            &lt;img class=&quot;img-fluid&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;Second slide&quot;&gt;
                                                            &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                                                                &lt;h3 class=&quot;text-white&quot;&gt;Second title goes here&lt;/h3&gt;
                                                                &lt;p&gt;this is the subcontent you can use this&lt;/p&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;carousel-item&quot;&gt;
                                                            &lt;img class=&quot;img-fluid&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;Third slide&quot;&gt;
                                                            &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                                                                &lt;h3 class=&quot;text-white&quot;&gt;Third title goes here&lt;/h3&gt;
                                                                &lt;p&gt;this is the subcontent you can use this&lt;/p&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleIndicators3&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
                                                        &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
                                                    &lt;/a&gt;
                                                    &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleIndicators3&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
                                                        &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
                                                    &lt;/a&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">With Individual Interval</h4>
                        <h6 class="card-subtitle">Add data-interval="" to a .carousel-item to change the amount
                            of time to delay between automatically cycling to the next item.</h6>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active" data-interval="10000">
                                    <img class="img-fluid" src="https://via.placeholder.com/890x593?text=Image" alt="First slide"></div>
                                <div class="carousel-item" data-interval="2000">
                                    <img class="img-fluid"   src="https://via.placeholder.com/890x593?text=Image"
                                         alt="Second slide"></div>
                                <div class="carousel-item"><img class="img-fluid"
                                                                src="https://via.placeholder.com/890x593?text=Image"
                                                                alt="Third slide"></div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                               data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span> </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                               data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span> </a>
                        </div>
                        <pre class="language-html scrollable">
                                    <code>
                                        &lt;div id=&quot;carouselExampleIndicators&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;
                                            &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                                                &lt;div class=&quot;carousel-item active&quot; data-interval=&quot;10000&quot;&gt; &lt;img class=&quot;img-fluid&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;First slide&quot;&gt; &lt;/div&gt;
                                                &lt;div class=&quot;carousel-item&quot; data-interval=&quot;2000&quot;&gt; &lt;img class=&quot;img-fluid&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;Second slide&quot;&gt; &lt;/div&gt;
                                                &lt;div class=&quot;carousel-item&quot;&gt; &lt;img class=&quot;img-fluid&quot; src=&quot;https://via.placeholder.com/890x593?text=Image&quot; alt=&quot;Third slide&quot;&gt; &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt; &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt; &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt; &lt;/a&gt;
                                            &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt; &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt; &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt; &lt;/a&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- End row -->
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

