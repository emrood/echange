@extends('backend.layouts.app')
@section('title') {{ 'List Media | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'List Media'])
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
                        <!-- .row -->
                        <div class="row">
                            <div class="col-md-4 col-sm-4 mt-4">
                                <h4 class="card-title">Basic example <a class="get-code" data-toggle="collapse"
                                                                        href="#pgr1" aria-expanded="true"><i class="fa fa-code" title="Get Code"
                                                                                                             data-toggle="tooltip"></i></a></h4>
                                <div class="collapse mt-3 well" id="pgr1" aria-expanded="true">
                                            <pre class="language-html scrollable">
                                                 <code>
                                                    &lt;ul class="list-group"&gt;<br/>
                                                        &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;<br/>
                                                        &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;<br/>
                                                        &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;<br/>
                                                        &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;<br/>
                                                        &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;<br/>
                                                    &lt;/ul&gt;
                                              </code></pre>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4 mt-4">
                                <h4 class="card-title">Linked items <a class="get-code" data-toggle="collapse"
                                                                       href="#pgr2" aria-expanded="true"><i class="fa fa-code" title="Get Code"
                                                                                                            data-toggle="tooltip"></i></a></h4>
                                <div class="collapse mt-3 well" id="pgr2" aria-expanded="true">
                                            <pre class="language-html scrollable">
                                                <code>
                                                    &lt;div class="list-group"&gt;<br/>
                                                        &lt;a href="javascript:void(0)" class="list-group-item active"&gt;Cras justo odio&lt;/a&gt;
                                                        &lt;a href="javascript:void(0)" class="list-group-item"&gt;Dapibus ac facilisis in&lt;/a&gt;
                                                        &lt;a href="javascript:void(0)" class="list-group-item"&gt;Morbi leo risus&lt;/a&gt;
                                                        &lt;a href="javascript:void(0)" class="list-group-item"&gt;Porta ac consectetur ac&lt;/a&gt;
                                                        &lt;a href="javascript:void(0)" class="list-group-item"&gt;Vestibulum at eros&lt;/a&gt;
                                                    &lt;/div&gt;
                                                </code> 
                                            </pre>
                                </div>
                                <div class="list-group"> <a href="javascript:void(0)" class="list-group-item active">Cras
                                        justo odio</a> <a href="javascript:void(0)" class="list-group-item">Dapibus
                                        ac facilisis in</a> <a href="javascript:void(0)" class="list-group-item">Morbi
                                        leo risus</a> <a href="javascript:void(0)" class="list-group-item">Porta
                                        ac consectetur ac</a> <a href="javascript:void(0)" class="list-group-item">Vestibulum
                                        at eros</a> </div>
                            </div>
                            <div class="col-md-4 col-sm-4 mt-4">
                                <h4 class="card-title">With Badges <a class="get-code" data-toggle="collapse"
                                                                      href="#pgr3" aria-expanded="true"><i class="fa fa-code" title="Get Code"
                                                                                                           data-toggle="tooltip"></i></a></h4>
                                <div class="collapse mt-3 well" id="pgr3" aria-expanded="true">
                                            <pre class="language-html scrollable">
                                                <code>
                                                    &lt;ul class="list-group list-group-full"&gt;<br/>
                                                        &lt;li class="list-group-item"&gt;<br/>
                                                          &lt;span class="badge badge-success"&gt;6&lt;/span&gt; Cras justo odio
                                                        &lt;/li&gt;<br/>
                                                        &lt;li class="list-group-item"&gt;<br/>
                                                          Dapibus ac facilisis in
                                                        &lt;/li&gt;<br/>
                                                        &lt;li class="list-group-item"&gt;<br/>
                                                          &lt;span class="badge badge-danger"&gt;3&lt;/span&gt; Morbi leo risus
                                                        &lt;/li&gt;<br/>
                                                        &lt;li class="list-group-item active"&gt;<br/>
                                                          &lt;span class="badge badge-info"&gt;10&lt;/span&gt; Porta ac consectetur ac
                                                        &lt;/li&gt;<br/>
                                                        &lt;li class="list-group-item"&gt;<br/>
                                                          Vestibulum at eros
                                                        &lt;/li&gt;<br/>
                                                    &lt;/ul&gt;
                                              </code> </pre>
                                </div>
                                <ul class="list-group list-group-full">
                                    <li class="list-group-item"> Cras justo odio <span class="badge badge-info ml-auto">6</span></li>
                                    <li class="list-group-item"> Dapibus ac facilisis in </li>
                                    <li class="list-group-item"> Morbi leo risus <span class="badge badge-danger ml-auto">3</span></li>
                                    <li class="list-group-item active"> Porta ac consectetur ac <span class="badge badge-success ml-auto">10</span></li>
                                    <li class="list-group-item"> Vestibulum at eros </li>
                                </ul>
                            </div>
                        </div>
                        <!-- / .row -->
                        <!-- .row -->
                        <div class="row">
                            <div class="col-md-4 col-sm-4 mt-4">
                                <h4 class="card-title">Button items <a class="get-code" data-toggle="collapse"
                                                                       href="#pgr4" aria-expanded="true"><i class="fa fa-code" title="Get Code"
                                                                                                            data-toggle="tooltip"></i></a></h4>
                                <div class="collapse mt-3 well" id="pgr4" aria-expanded="true">
                                            <pre class="language-html scrollable">
                                                <code>
                                                    &lt;div class=&quot;list-group&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;list-group-item&quot;&gt;Cras justo odio&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;list-group-item&quot;&gt;Morbi leo risus&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;list-group-item&quot;&gt;Porta ac consectetur ac&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/button&gt;
                                                    &lt;/div&gt;
                                              </code> </pre>
                                </div>
                                <div class="list-group">
                                    <button type="button" class="list-group-item">Cras justo odio</button>
                                    <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
                                    <button type="button" class="list-group-item">Morbi leo risus</button>
                                    <button type="button" class="list-group-item">Porta ac consectetur ac</button>
                                    <button type="button" class="list-group-item">Vestibulum at eros</button>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 mt-4">
                                <h4 class="card-title">Disabled items <a class="get-code" data-toggle="collapse"
                                                                         href="#pgr5" aria-expanded="true"><i class="fa fa-code" title="Get Code"
                                                                                                              data-toggle="tooltip"></i></a></h4>
                                <div class="collapse mt-3 well" id="pgr5" aria-expanded="true">
                                            <pre class="language-html scrollable">
                                                <code>
                                                    &lt;div class=&quot;list-group&quot;&gt;
                                                        &lt;a href=&quot;javascript:void(0)&quot; class=&quot;list-group-item disabled&quot;&gt;Cras justo odio &lt;/a&gt;
                                                        &lt;a href=&quot;javascript:void(0)&quot; class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/a&gt;
                                                        &lt;a href=&quot;javascript:void(0)&quot; class=&quot;list-group-item&quot;&gt;Morbi leo risus&lt;/a&gt;
                                                        &lt;a href=&quot;javascript:void(0)&quot; class=&quot;list-group-item&quot;&gt;Porta ac consectetur ac&lt;/a&gt;
                                                        &lt;a href=&quot;javascript:void(0)&quot; class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/a&gt;
                                                    &lt;/div&gt;
                                              </code> 
                                          </pre>
                                </div>
                                <div class="list-group">
                                    <a href="javascript:void(0)" class="list-group-item disabled">Cras justo
                                        odio </a>
                                    <a href="javascript:void(0)" class="list-group-item">Dapibus ac facilisis
                                        in</a>
                                    <a href="javascript:void(0)" class="list-group-item">Morbi leo risus</a>
                                    <a href="javascript:void(0)" class="list-group-item">Porta ac consectetur
                                        ac</a>
                                    <a href="javascript:void(0)" class="list-group-item">Vestibulum at eros</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 mt-4">
                                <h4 class="card-title">Disabled items <a class="get-code" data-toggle="collapse"
                                                                         href="#pgr6" aria-expanded="true"><i class="fa fa-code" title="Get Code"
                                                                                                              data-toggle="tooltip"></i></a></h4>
                                <div class="collapse mt-3 well" id="pgr6" aria-expanded="true">
                                            <pre class="language-html scrollable">
                                                <code>
                                                    &lt;ul class=&quot;list-group&quot;&gt;
                                                        &lt;li class=&quot;list-group-item list-group-item-success&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
                                                        &lt;li class=&quot;list-group-item list-group-item-info&quot;&gt;Cras sit amet nibh libero&lt;/li&gt;
                                                        &lt;li class=&quot;list-group-item list-group-item-warning&quot;&gt;Porta ac consectetur ac&lt;/li&gt;
                                                        &lt;li class=&quot;list-group-item list-group-item-danger&quot;&gt;Vestibulum at eros&lt;/li&gt;
                                                        &lt;li class=&quot;list-group-item list-group-item-default&quot;&gt;Vestibulum at eros&lt;/li&gt;
                                                    &lt;/ul&gt;
                                              </code> 
                                          </pre>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
                                    <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
                                    <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
                                    <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
                                    <li class="list-group-item list-group-item-default">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.row -->
                        <!-- .row -->
                        <div class="row">
                            <div class="col-md-8 mt-4">
                                <h4 class="card-title">Media object</h4>
                                <ul class="list-unstyled">
                                    <li class="media">
                                        <img class="d-flex mr-3" src="https://via.placeholder.com/60x60?text=Media" width="60"
                                             alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet
                                            nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                            Donec lacinia congue felis in faucibus.
                                        </div>
                                    </li>
                                    <li class="media my-4">
                                        <img class="d-flex mr-3" src="https://via.placeholder.com/60x60?text=Media" width="60"
                                             alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet
                                            nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                            Donec lacinia congue felis in faucibus.
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="d-flex mr-3" src="https://via.placeholder.com/60x60?text=Media" width="60"
                                             alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet
                                            nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                            Donec lacinia congue felis in faucibus.
                                            <div class="media mt-3">
                                                <a class="d-flex pr-3" href="javascript:void(0)">
                                                    <img src="https://via.placeholder.com/60x60?text=Media" width="60"
                                                         height="60" alt="Generic placeholder image">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="mt-0">Media heading</h5> Cras sit amet nibh
                                                    libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                    sollicitudin. Cras purus odio, vestibulum in vulputate at,
                                                    tempus viverra turpis. Fusce condimentum nunc ac nisi
                                                    vulputate fringilla. Donec lacinia congue felis in
                                                    faucibus.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-12 mt-4">
                                <h4 class="card-title">Custom content</h4>
                                <div class="list-group">
                                    <a href="javascript:void(0)" class="list-group-item list-group-item-action flex-column align-items-start active">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1 text-white">List group item heading</h5>
                                            <small>3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus.
                                            Maecenas sed diam eget risus varius blandit.</p>
                                        <small>Donec id elit non mi porta.</small>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5>
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus.
                                            Maecenas sed diam eget risus varius blandit.</p>
                                        <small class="text-muted">Donec id elit non mi porta.</small>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5>
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus.
                                            Maecenas sed diam eget risus varius blandit.</p>
                                        <small class="text-muted">Donec id elit non mi porta.</small>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;ul class=&quot;list-unstyled&quot;&gt;
                                                    &lt;li class=&quot;media&quot;&gt;
                                                        &lt;img class=&quot;d-flex mr-3&quot; src=&quot;https://via.placeholder.com/600x600?text=user&quot; width=&quot;60&quot; alt=&quot;Generic placeholder image&quot;&gt;
                                                        &lt;div class=&quot;media-body&quot;&gt;
                                                            &lt;h5 class=&quot;mt-0 mb-1&quot;&gt;List-based media object&lt;/h5&gt; Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                        &lt;/div&gt;
                                                    &lt;/li&gt;
                                                    &lt;li class=&quot;media my-4&quot;&gt;
                                                        &lt;img class=&quot;d-flex mr-3&quot; src=&quot;.https://via.placeholder.com/600x600?text=user&quot; width=&quot;60&quot; alt=&quot;Generic placeholder image&quot;&gt;
                                                        &lt;div class=&quot;media-body&quot;&gt;
                                                            &lt;h5 class=&quot;mt-0 mb-1&quot;&gt;List-based media object&lt;/h5&gt; Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                        &lt;/div&gt;
                                                    &lt;/li&gt;
                                                    &lt;li class=&quot;media&quot;&gt;
                                                        &lt;img class=&quot;d-flex mr-3&quot; src=&quot;.https://via.placeholder.com/600x600?text=user&quot; width=&quot;60&quot; alt=&quot;Generic placeholder image&quot;&gt;
                                                        &lt;div class=&quot;media-body&quot;&gt;
                                                            &lt;h5 class=&quot;mt-0 mb-1&quot;&gt;List-based media object&lt;/h5&gt; Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                            &lt;div class=&quot;media mt-3&quot;&gt;
                                                                &lt;a class=&quot;d-flex pr-3&quot; href=&quot;javascript:void(0)&quot;&gt;
                                                                    &lt;img src=&quot;https://via.placeholder.com/600x600?text=user&quot; width=&quot;60&quot; height=&quot;60&quot; alt=&quot;Generic placeholder image&quot;&gt;
                                                                &lt;/a&gt;
                                                                &lt;div class=&quot;media-body&quot;&gt;
                                                                    &lt;h5 class=&quot;mt-0&quot;&gt;Media heading&lt;/h5&gt; Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/li&gt;
                                                &lt;/ul&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-md-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div class=&quot;list-group&quot;&gt;
                                                    &lt;a href=&quot;javascript:void(0)&quot; class=&quot;list-group-item list-group-item-action flex-column align-items-start active&quot;&gt;
                                                        &lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
                                                            &lt;h5 class=&quot;mb-1 text-white&quot;&gt;List group item heading&lt;/h5&gt;
                                                            &lt;small&gt;3 days ago&lt;/small&gt;
                                                        &lt;/div&gt;
                                                        &lt;p class=&quot;mb-1&quot;&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
                                                        &lt;small&gt;Donec id elit non mi porta.&lt;/small&gt;
                                                    &lt;/a&gt;
                                                    &lt;a href=&quot;javascript:void(0)&quot; class=&quot;list-group-item list-group-item-action flex-column align-items-start&quot;&gt;
                                                        &lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
                                                            &lt;h5 class=&quot;mb-1&quot;&gt;List group item heading&lt;/h5&gt;
                                                            &lt;small class=&quot;text-muted&quot;&gt;3 days ago&lt;/small&gt;
                                                        &lt;/div&gt;
                                                        &lt;p class=&quot;mb-1&quot;&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
                                                        &lt;small class=&quot;text-muted&quot;&gt;Donec id elit non mi porta.&lt;/small&gt;
                                                    &lt;/a&gt;
                                                    &lt;a href=&quot;javascript:void(0)&quot; class=&quot;list-group-item list-group-item-action flex-column align-items-start&quot;&gt;
                                                        &lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
                                                            &lt;h5 class=&quot;mb-1&quot;&gt;List group item heading&lt;/h5&gt;
                                                            &lt;small class=&quot;text-muted&quot;&gt;3 days ago&lt;/small&gt;
                                                        &lt;/div&gt;
                                                        &lt;p class=&quot;mb-1&quot;&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
                                                        &lt;small class=&quot;text-muted&quot;&gt;Donec id elit non mi porta.&lt;/small&gt;
                                                    &lt;/a&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                            </div>
                            <div class="col-md-8 mt-4">
                                <h4 class="card-title">JavaScript behavior</h4>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action active" id="list-home-list"
                                               data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                                            <a class="list-group-item list-group-item-action" id="list-profile-list"
                                               data-toggle="list" href="#list-profile" role="tab"
                                               aria-controls="profile">Profile</a>
                                            <a class="list-group-item list-group-item-action" id="list-messages-list"
                                               data-toggle="list" href="#list-messages" role="tab"
                                               aria-controls="messages">Messages</a>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                                 aria-labelledby="list-home-list">
                                                Irure enim occaecat labore sit qui aliquip reprehenderit amet
                                                velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia
                                                magna sit occaecat laboris sunt dolor.
                                            </div>
                                            <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                                 aria-labelledby="list-profile-list">
                                                Irure enim occaecat labore sit qui aliquip reprehenderit amet
                                                velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia
                                                magna sit occaecat laboris sunt dolor.
                                            </div>
                                            <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                                 aria-labelledby="list-messages-list">
                                                Irure enim occaecat labore sit qui aliquip reprehenderit amet
                                                velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia
                                                magna sit occaecat laboris sunt dolor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div class=&quot;row&quot;&gt;
                                                  &lt;div class=&quot;col-4&quot;&gt;
                                                    &lt;div class=&quot;list-group&quot; id=&quot;list-tab&quot; role=&quot;tablist&quot;&gt;
                                                      &lt;a class=&quot;list-group-item list-group-item-action active&quot; id=&quot;list-home-list&quot; data-toggle=&quot;list&quot; href=&quot;#list-home&quot; role=&quot;tab&quot; aria-controls=&quot;home&quot;&gt;Home&lt;/a&gt;
                                                      &lt;a class=&quot;list-group-item list-group-item-action&quot; id=&quot;list-profile-list&quot; data-toggle=&quot;list&quot; href=&quot;#list-profile&quot; role=&quot;tab&quot; aria-controls=&quot;profile&quot;&gt;Profile&lt;/a&gt;
                                                      &lt;a class=&quot;list-group-item list-group-item-action&quot; id=&quot;list-messages-list&quot; data-toggle=&quot;list&quot; href=&quot;#list-messages&quot; role=&quot;tab&quot; aria-controls=&quot;messages&quot;&gt;Messages&lt;/a&gt;
                                                    &lt;/div&gt;
                                                  &lt;/div&gt;
                                                  &lt;div class=&quot;col-8&quot;&gt;
                                                    &lt;div class=&quot;tab-content&quot; id=&quot;nav-tabContent&quot;&gt;
                                                      &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;list-home&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;list-home-list&quot;&gt;
                                                          Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. 
                                                      &lt;/div&gt;
                                                      &lt;div class=&quot;tab-pane fade&quot; id=&quot;list-profile&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;list-profile-list&quot;&gt;
                                                          Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. 
                                                      &lt;/div&gt;
                                                      &lt;div class=&quot;tab-pane fade&quot; id=&quot;list-messages&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;list-messages-list&quot;&gt;
                                                          Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. 
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
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Media heading</h5>
                                <div class="media">
                                    <img class="mr-3 img-fluid w-25" src="https://via.placeholder.com/890x593?text=Media" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5> Cras sit amet nibh libero, in
                                        gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                                        purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce
                                        condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis in faucibus.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Nesting</h5>
                                <div class="media">
                                    <img class="mr-3 w-25" src="https://via.placeholder.com/890x593?text=Media" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5> Cras sit amet nibh libero, in
                                        gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                                        purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce
                                        condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis in faucibus.
                                        <div class="media mt-3">
                                            <a class="pr-3 w-25" href="#">
                                                <img src="https://via.placeholder.com/890x593?text=Media" class="w-100" alt="Generic placeholder image">
                                            </a>
                                            <div class="media-body">
                                                <h5 class="mt-0">Media heading</h5> Cras sit amet nibh libero,
                                                in gravida nulla. Nulla vel metus scelerisque ante
                                                sollicitudin. Cras purus odio, vestibulum in vulputate at,
                                                tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                                                fringilla. Donec lacinia congue felis in faucibus.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Alignment</h5>
                                <div class="media">
                                    <img class="align-self-start w-25 mr-3" src="https://via.placeholder.com/890x593?text=Media"
                                         alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="mt-0">Top-aligned media</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                            scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                            vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                            vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                        <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu
                                            leo. Cum sociis natoque penatibus et magnis dis parturient montes,
                                            nascetur ridiculus mus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Center-aligned media</h5>
                                <div class="media">
                                    <img class="align-self-center w-25 mr-3" src="https://via.placeholder.com/890x593?text=Media"
                                         alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="mt-0">Center-aligned media</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                            scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                            vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                            vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                        <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis
                                            ornare vel eu leo. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur ridiculus mus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Bottom-aligned media</h5>
                                <div class="media">
                                    <img class="align-self-end mr-3 w-25" src="https://via.placeholder.com/890x593?text=Media"
                                         alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="mt-0">Bottom-aligned media</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                            scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                            vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                            vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                        <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis
                                            ornare vel eu leo. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur ridiculus mus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Order</h5>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1">Media object</h5> Cras sit amet nibh libero, in
                                        gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                                        purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce
                                        condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis in faucibus.
                                    </div>
                                    <img class="ml-3 w-25" src="https://via.placeholder.com/890x593?text=Media" alt="Generic placeholder image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Media list</h5>
                                <ul class="list-unstyled">
                                    <li class="media">
                                        <img class="mr-3 w-25" src="https://via.placeholder.com/890x593?text=Media" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet
                                            nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                            Donec lacinia congue felis in faucibus.
                                        </div>
                                    </li>
                                    <li class="media my-4">
                                        <img class="mr-3 w-25" src="https://via.placeholder.com/890x593?text=Media" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet
                                            nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                            Donec lacinia congue felis in faucibus.
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="mr-3 w-25" src="https://via.placeholder.com/890x593?text=Media" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet
                                            nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                            Donec lacinia congue felis in faucibus.
                                        </div>
                                    </li>
                                </ul>
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
