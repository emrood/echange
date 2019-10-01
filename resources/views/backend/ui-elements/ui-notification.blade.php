@extends('backend.layouts.app')
@section('title') {{ 'Notifications | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Notifications'])
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
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <!-- Column -->
                            <div class="col-lg-4 col-md-12">
                                <h4 class="card-title">Alert with different color</h4>
                                <h6 class="card-subtitle">use the class <code>alert alert-*colors*</code> for
                                    dezier</h6>
                                <div class="alert alert-success">This is an example top alert. You can edit
                                    what u wish. </div>
                                <div class="alert alert-danger">This is an example top alert. You can edit what
                                    u wish. </div>
                                <div class="alert alert-warning">This is an example top alert. You can edit
                                    what u wish. </div>
                                <div class="alert alert-info">This is an example top alert. You can edit what u
                                    wish. </div>
                            </div>
                            <!-- Column -->
                            <div class="col-lg-4 col-md-12">
                                <h4 class="card-title">Dissmissal Alert</h4>
                                <h6 class="card-subtitle">add the button with <code>close</code> class</h6>
                                <div class="alert alert-success"> <i class="ti-user"></i> This is an example
                                    top alert. You can edit what u wish.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span> </button>
                                </div>
                                <div class="alert alert-danger"> <i class="ti-user"></i> This is an example top
                                    alert. You can edit what u wish.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span> </button>
                                </div>
                                <div class="alert alert-warning"> <i class="ti-user"></i> This is an example
                                    top alert. You can edit what u wish.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span> </button>
                                </div>
                                <div class="alert alert-info"> <i class="ti-user"></i> This is an example top
                                    alert. You can edit what u wish.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span> </button>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-lg-4 col-md-12">
                                <h4 class="card-title">Alert with image / icon </h4>
                                <h6 class="card-subtitle">add the image / icon before content </h6>
                                <div class="alert alert-success"> <i class="ti-user"></i> This is an example
                                    top alert. You can edit what u wish.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span> </button>
                                </div>
                                <div class="alert alert-danger"> <img src="https://via.placeholder.com/52x52?text=user"
                                                                      width="30" class="rounded-circle" alt="img"> This is an example top
                                    alert. You can edit what u wish.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span> </button>
                                </div>
                                <div class="alert alert-warning"> <img src="https://via.placeholder.com/52x52?text=user"
                                                                       width="30" class="rounded-circle" alt="img"> This is an example top
                                    alert. You can edit what u wish.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span> </button>
                                </div>
                                <div class="alert alert-info"> <i class="ti-user"></i> This is an example top
                                    alert. You can edit what u wish.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span> </button>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <pre class="language-html scrollable">
                                    <code>
                                        &lt;!-- Alert with different color --&gt;
                                        &lt;div class=&quot;alert alert-success&quot;&gt;This is an example top alert. You can edit what u wish. &lt;/div&gt;

                                        &lt;!-- Dissmissal Alert --&gt;
                                        &lt;div class=&quot;alert alert-success&quot;&gt; &lt;i class=&quot;ti-user&quot;&gt;&lt;/i&gt; This is an example top alert. You can edit what u wish.
                                            &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt; &lt;span aria-hidden=&quot;true&quot;&gt;&times;&lt;/span&gt; &lt;/button&gt;
                                        &lt;/div&gt;

                                        &lt;!-- Alert with image / icon --&gt;
                                        &lt;div class=&quot;alert alert-warning&quot;&gt; &lt;img src=&quot;https://via.placeholder.com/600x600?text=Image&quot; width=&quot;30&quot; class=&quot;rounded-circle&quot; alt=&quot;img&quot;&gt; This is an example top alert. You can edit what u wish.
                                            &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt; &lt;span aria-hidden=&quot;true&quot;&gt;&times;&lt;/span&gt; &lt;/button&gt;
                                        &lt;/div&gt;
                                   </code>
                                </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <!-- Column -->
                            <div class="col-lg-6 col-md-12">
                                <h4 class="card-title">Alert with rounded corner </h4>
                                <h6 class="card-subtitle">add the <code>alert-rounded</code> class to the alert
                                </h6>
                                <div class="alert alert-success alert-rounded"> <i class="ti-user"></i> This is
                                    an example top alert. You can edit what u wish.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span> </button>
                                </div>
                                <div class="alert alert-danger alert-rounded"> <img src="https://via.placeholder.com/52x52?text=user"
                                                                                    width="30" class="rounded-circle" alt="img"> This is an example top
                                    alert. You can edit what u wish.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span> </button>
                                </div>
                                <div class="alert alert-warning alert-rounded"> <img src="https://via.placeholder.com/52x52?text=user"
                                                                                     width="30" class="rounded-circle" alt="img"> This is an example top
                                    alert. You can edit what u wish.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span> </button>
                                </div>
                                <div class="alert alert-info alert-rounded">This is an example top alert. You
                                    can edit what u wish.
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-6 col-md-12">
                                <h4 class="card-title">Alert with content </h4>
                                <h6 class="card-subtitle">Alerts can also contain additional HTML elements </h6>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span> </button>
                                    <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>
                                    This is an example top alert. You can edit what u wish. Aww yeah, you
                                    successfully read this important alert message. This example text is going
                                    to run a bit longer so that you can see how spacing within an alert works
                                    with this kind of content.
                                </div>
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span> </button>
                                    <h3 class="text-info"><i class="fa fa-exclamation-circle"></i> Information</h3>
                                    This is an example top alert. You can edit what u wish. Aww yeah, you
                                    successfully read this important alert message. This example text is going
                                    to run a bit longer so that you can see how spacing within an alert works
                                    with this kind of content.
                                </div>
                                <div class="alert alert-warning">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span> </button>
                                    <h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Warning</h3>
                                    This is an example top alert. You can edit what u wish. Aww yeah, you
                                    successfully read this important alert message. This example text is going
                                    to run a bit longer so that you can see how spacing within an alert works
                                    with this kind of content.
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <pre class="language-html scrollable">
                                    <code>
                                        &lt;!-- Alert with rounded corner --&gt;
                                        &lt;div class=&quot;alert alert-success alert-rounded&quot;&gt; &lt;i class=&quot;ti-user&quot;&gt;&lt;/i&gt; This is an example top alert. You can edit what u wish.
                                            &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt; &lt;span aria-hidden=&quot;true&quot;&gt;&times;&lt;/span&gt; &lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;!-- Alert with content --&gt;
                                        &lt;div class=&quot;alert alert-success&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt; &lt;span aria-hidden=&quot;true&quot;&gt;&times;&lt;/span&gt; &lt;/button&gt;
                                            &lt;h3 class=&quot;text-success&quot;&gt;&lt;i class=&quot;fa fa-check-circle&quot;&gt;&lt;/i&gt; Success&lt;/h3&gt; This is an example top alert. You can edit what u wish. Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
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
   
