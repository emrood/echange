@extends('backend.layouts.app')
@section('title') {{ 'Typography | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Typography'])
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
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="card-title">Typography</h4>
                                <h6 class="card-subtitle">Use tags <code>h1 to h6</code> for get desire
                                    heading.</h6>
                                <h1>h1. Bootstrap heading</h1>
                                <h2>h2. Bootstrap heading</h2>
                                <h3>h3. Bootstrap heading</h3>
                                <h4>h4. Bootstrap heading</h4>
                                <h5>h5. Bootstrap heading</h5>
                                <h6>h6. Bootstrap heading</h6>
                                <pre class="language-html scrollable">
                                            <code>
                                                &lt;h1&gt;h1. Bootstrap heading&lt;/h1&gt;
                                                &lt;h2&gt;h2. Bootstrap heading&lt;/h2&gt;
                                                &lt;h3&gt;h3. Bootstrap heading&lt;/h3&gt;
                                                &lt;h4&gt;h4. Bootstrap heading&lt;/h4&gt;
                                                &lt;h5&gt;h5. Bootstrap heading&lt;/h5&gt;
                                                &lt;h6&gt;h6. Bootstrap heading&lt;/h6&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-6">
                                <h4 class="card-title">Heading with subtitle</h4>
                                <h6 class="card-subtitle">Use tags <code>h1 to h6</code> for get desire
                                    heading.</h6>
                                <h1>Heading 1 <small>Sub-heading</small></h1>
                                <h2>Heading 2 <small>Sub-heading</small></h2>
                                <h3>Heading 3 <small>Sub-heading</small></h3>
                                <h4>Heading 4 <small>Sub-heading</small></h4>
                                <h5>Heading 5 <small>Sub-heading</small></h5>
                                <h6>Heading 6 <small>Sub-heading</small></h6>
                                <pre class="language-html scrollable">
                                            <code>
                                                &lt;h1&gt;Heading 1 &lt;small&gt;Sub-heading&lt;/small&gt;&lt;/h1&gt;
                                                &lt;h2&gt;Heading 2 &lt;small&gt;Sub-heading&lt;/small&gt;&lt;/h2&gt;
                                                &lt;h3&gt;Heading 3 &lt;small&gt;Sub-heading&lt;/small&gt;&lt;/h3&gt;
                                                &lt;h4&gt;Heading 4 &lt;small&gt;Sub-heading&lt;/small&gt;&lt;/h4&gt;
                                                &lt;h5&gt;Heading 5 &lt;small&gt;Sub-heading&lt;/small&gt;&lt;/h5&gt;
                                                &lt;h6&gt;Heading 6 &lt;small&gt;Sub-heading&lt;/small&gt;&lt;/h6&gt;
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
                            <div class="col-lg-5">
                                <h4 class="card-title">Paragraph with justify</h4>
                                <h6 class="card-subtitle">Use tags <code>text-justify</code> for get desire
                                    paragraph.</h6>
                                <p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis
                                    iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate
                                    felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc
                                    posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae
                                    in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
                            </div>
                            <div class="col-lg-6 offset-lg-1">
                                <h4 class="card-title">Alignment text</h4>
                                <h6 class="card-subtitle">Use tags <code>text-left, text-center, text-right</code>
                                    for get desire text.</h6>
                                <p class="text-left">Left aligned text on all viewport sizes.</p>
                                <p class="text-center">Center aligned text on all viewport sizes.</p>
                                <p class="text-right">Right aligned text on all viewport sizes.</p>
                            </div>
                            <div class="col-12">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;p class=&quot;text-left&quot;&gt;Left aligned text on all viewport sizes.&lt;/p&gt;
                                                &lt;p class=&quot;text-center&quot;&gt;Center aligned text on all viewport sizes.&lt;/p&gt;
                                                &lt;p class=&quot;text-right&quot;&gt;Right aligned text on all viewport sizes.&lt;/p&gt;
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
                                <h4 class="card-title">View port text</h4>
                                <h6 class="card-subtitle">Use tags <code>text-sm-left, text-md-left, text-lg-left, text-xl-left </code>
                                    for get desire text.</h6>
                                <p class="text-sm-left">Left aligned text on viewports sized SM (small) or
                                    wider.</p>
                                <p class="text-md-left">Left aligned text on viewports sized MD (medium) or
                                    wider.</p>
                                <p class="text-lg-left">Left aligned text on viewports sized LG (large) or
                                    wider.</p>
                                <p class="text-xl-left">Left aligned text on viewports sized XL (extra-large)
                                    or wider.</p>
                            </div>
                            <div class="col-lg-6">
                                <h4 class="card-title">Font weight and italics</h4>
                                <h6 class="card-subtitle">Use tags <code>font-weight-bold, font-weight-normal, font-weight-italic</code>
                                    for get desire text.</h6>
                                <p class="font-weight-bold">Bold text.</p>
                                <p class="font-weight-normal">Normal weight text.</p>
                                <p class="font-italic">Italic text.</p>
                            </div>
                            <div class="col-lg-6">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;p class=&quot;text-sm-left&quot;&gt;Left aligned text on viewports sized SM (small) or wider.&lt;/p&gt;
                                                &lt;p class=&quot;text-md-left&quot;&gt;Left aligned text on viewports sized MD (medium) or wider.&lt;/p&gt;
                                                &lt;p class=&quot;text-lg-left&quot;&gt;Left aligned text on viewports sized LG (large) or wider.&lt;/p&gt;
                                                &lt;p class=&quot;text-xl-left&quot;&gt;Left aligned text on viewports sized XL (extra-large) or wider.&lt;/p&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-6">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;p class=&quot;font-weight-bold&quot;&gt;Bold text.&lt;/p&gt;
                                                &lt;p class=&quot;font-weight-normal&quot;&gt;Normal weight text.&lt;/p&gt;
                                                &lt;p class=&quot;font-italic&quot;&gt;Italic text.&lt;/p&gt;
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
                            <div class="col-lg-4">
                                <h4 class="card-title">Text colors</h4>
                                <h6 class="card-subtitle">Use tags below class for get desire text.</h6>
                                <p class="text-muted">This is an example of muted text. Add class <code>text-muted</code></p>
                                <p class="text-primary">This is an example of primary text. Add class <code>text-primary</code></p>
                                <p class="text-success">This is an example of success text. Add class <code>text-success</code></p>
                                <p class="text-info">This is an example of info text. Add class <code>text-info</code></p>
                                <p class="text-warning">This is an example of warning text. Add class <code>text-warning</code></p>
                                <p class="text-danger">This is an example of danger text. Add class <code>text-danger</code></p>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="card-title">Address</h4>
                                <h6 class="card-subtitle">Use <code>address</code> for get desire address.</h6>
                                <address>
                                    <strong>Twitter, Inc.</strong>
                                    <br> 795 Folsom Ave, Suite 600
                                    <br> San Francisco, CA 94107
                                    <br>
                                    <abbr title="Phone">P:</abbr>(123) 456-7890
                                </address>
                                <address>
                                    <strong>George Belly</strong>
                                    <br>
                                    <a href="mailto:#">first.last@example.com</a>
                                </address>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="card-title">Blockquotes</h4>
                                <h6 class="card-subtitle">Use <code>blockquote</code> for get desire address.</h6>
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                    posuere erat a ante.</blockquote>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                        erat a ante.</p>
                                    <small>- Someone famous in <cite title="Source Title">Source Title</cite></small>
                                </blockquote>
                            </div>
                            <div class="col-lg-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;p class=&quot;text-muted&quot;&gt;This is an example of muted text. Add class &lt;code&gt;text-muted&lt;/code&gt;&lt;/p&gt;
                                                &lt;p class=&quot;text-primary&quot;&gt;This is an example of primary text. Add class &lt;code&gt;text-primary&lt;/code&gt;&lt;/p&gt;
                                                &lt;p class=&quot;text-success&quot;&gt;This is an example of success text. Add class &lt;code&gt;text-success&lt;/code&gt;&lt;/p&gt;
                                                &lt;p class=&quot;text-info&quot;&gt;This is an example of info text. Add class &lt;code&gt;text-info&lt;/code&gt;&lt;/p&gt;
                                                &lt;p class=&quot;text-warning&quot;&gt;This is an example of warning text. Add class &lt;code&gt;text-warning&lt;/code&gt;&lt;/p&gt;
                                                &lt;p class=&quot;text-danger&quot;&gt;This is an example of danger text. Add class &lt;code&gt;text-danger&lt;/code&gt;&lt;/p&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;address&gt;
                                                    &lt;strong&gt;Twitter, Inc.&lt;/strong&gt;
                                                    &lt;br&gt; 795 Folsom Ave, Suite 600
                                                    &lt;br&gt; San Francisco, CA 94107
                                                    &lt;br&gt;
                                                    &lt;abbr title=&quot;Phone&quot;&gt;P:&lt;/abbr&gt;(123) 456-7890
                                                &lt;/address&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;blockquote&gt;
                                                    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
                                                    &lt;small&gt;- Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;&lt;/small&gt;
                                                &lt;/blockquote&gt;
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
                            <div class="col-lg-4">
                                <h4 class="card-title">Ol Listing</h4>
                                <h6 class="card-subtitle">Use tags <code>ol > li</code>for get desire ol list.</h6>
                                <ol>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa </li>
                                </ol>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="card-title">Ul Listing</h4>
                                <h6 class="card-subtitle">Use tags <code>ul > li</code>for get desire ol list.</h6>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="card-title">Description Text</h4>
                                <h6 class="card-subtitle">Use tags <code>dl > dt</code>for get desire ol list.</h6>
                                <dl>
                                    <dt>Standard Description List</dt>
                                    <dd>Description Text</dd>
                                    <dt>Description List Title</dt>
                                    <dd>Description List Text</dd>
                                </dl>
                            </div>
                            <div class="col-lg-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;ol&gt;
                                                    &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
                                                    &lt;li&gt;Consectetur adipiscing elit&lt;/li&gt;
                                                    &lt;li&gt;Integer molestie lorem at massa &lt;/li&gt;
                                                &lt;/ol&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;ul&gt;
                                                    &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
                                                    &lt;li&gt;Consectetur adipiscing elit&lt;/li&gt;
                                                    &lt;li&gt;Integer molestie lorem at massa &lt;/li&gt;
                                                &lt;/ul&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                 &lt;dl&gt;
                                                    &lt;dt&gt;Standard Description List&lt;/dt&gt;
                                                    &lt;dd&gt;Description Text&lt;/dd&gt;
                                                    &lt;dt&gt;Description List Title&lt;/dt&gt;
                                                    &lt;dd&gt;Description List Text&lt;/dd&gt;
                                                &lt;/dl&gt;
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
                            <div class="col-lg-4">
                                <h4 class="card-title">Fancy Listing 1</h4>
                                <h6 class="card-subtitle">Use class <code>list-icons</code>to ul for get desire
                                    ol list.</h6>
                                <ul class="list-style-none">
                                    <li><i class="ti-angle-right"></i> Lorem ipsum dolor sit amet</li>
                                    <li><i class="ti-angle-right"></i> Consectetur adipiscing elit</li>
                                    <li><i class="ti-angle-right"></i> Integer molestie lorem at massa </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="card-title">Fancy Listing with href</h4>
                                <h6 class="card-subtitle">Use class <code>list-icons</code>to ul for get desire
                                    ol list.</h6>
                                <ul class="list-style-none">
                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-info"></i>
                                            Lorem ipsum dolor sit amet</a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-info"></i>
                                            Consectetur adipiscing elit</a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-info"></i>
                                            Integer molestie lorem at massa </a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="card-title">Fancy Listing with href</h4>
                                <h6 class="card-subtitle">Use class <code>list-icons</code>to ul for get desire
                                    ol list.</h6>
                                <ul class="list-style-none">
                                    <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i> Lorem
                                            ipsum dolor sit amet</a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i>
                                            Consectetur adipiscing elit</a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i>
                                            Integer molestie lorem at massa </a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                 &lt;ul class=&quot;list-style-none&quot;&gt;
                                                    &lt;li&gt;&lt;i class=&quot;ti-angle-right&quot;&gt;&lt;/i&gt; Lorem ipsum dolor sit amet&lt;/li&gt;
                                                    &lt;li&gt;&lt;i class=&quot;ti-angle-right&quot;&gt;&lt;/i&gt; Consectetur adipiscing elit&lt;/li&gt;
                                                    &lt;li&gt;&lt;i class=&quot;ti-angle-right&quot;&gt;&lt;/i&gt; Integer molestie lorem at massa &lt;/li&gt;
                                                &lt;/ul&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;ul class=&quot;list-style-none&quot;&gt;
                                                    &lt;li&gt;&lt;a href=&quot;javascript:void(0)&quot;&gt;&lt;i class=&quot;fa fa-check text-info&quot;&gt;&lt;/i&gt; Lorem ipsum dolor sit amet&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;javascript:void(0)&quot;&gt;&lt;i class=&quot;fa fa-check text-info&quot;&gt;&lt;/i&gt; Consectetur adipiscing elit&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;javascript:void(0)&quot;&gt;&lt;i class=&quot;fa fa-check text-info&quot;&gt;&lt;/i&gt; Integer molestie lorem at massa &lt;/a&gt;&lt;/li&gt;
                                                &lt;/ul&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-lg-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;ul class=&quot;list-style-none&quot;&gt;
                                                    &lt;li&gt;&lt;a href=&quot;javascript:void(0)&quot;&gt;&lt;i class=&quot;fa fa-chevron-right&quot;&gt;&lt;/i&gt; Lorem ipsum dolor sit amet&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;javascript:void(0)&quot;&gt;&lt;i class=&quot;fa fa-chevron-right&quot;&gt;&lt;/i&gt; Consectetur adipiscing elit&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;javascript:void(0)&quot;&gt;&lt;i class=&quot;fa fa-chevron-right&quot;&gt;&lt;/i&gt; Integer molestie lorem at massa &lt;/a&gt;&lt;/li&gt;
                                                &lt;/ul&gt;
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
