@extends('layouts.app')
@section('title') {{ 'Home | '.env('APP_NAME') }} @endsection

@push('before-css')
    <style>
        .details-wrapper {
            display: inline-block;
            width: 100%;
        }

        .details-wrapper a {
            margin-bottom: 5px;
            display: inline-block;
        }
        .features-icons-icon i{
            font-size: 50px;
        }
        .spacer-all{
            padding: 120px!important;
        }

        .showcase-img {
            background-image: url({{asset('assets/images/db.jpg')}});
        }
        @media screen and (max-width: 768px) {
            .spacer-all{
                padding: 20px!important;
            }
            .showcase-img{
                background-image: url({{asset('assets/images/db.jpg')}});background-size: cover;height: 250px;width: 100%;
            }
        }
    </style>
@endpush

@section('content')
    <section class="spacer">
        <div class="container">
            <!-- .row -->
            <div class="row">
                <div class="col-lg-6">
                    <h2> Lorem <span>ipsum dolor sit amet.</span>                        </h2>

                    <p class="m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo mauris, dapibus vel enim nec, euismod accumsan augue. Sed consequat neque magna, nec malesuada orci aliquet sit amet. Curabitur tincidunt sapien dui, sit amet viverra arcu tempus ut. Phasellus malesuada ligula eget turpis elementum, fringilla porta erat lacinia. Quisque mollis odio sed sagittis tempor. Vivamus bibendum scelerisque mattis. Donec sodales tristique semper.</p>
                    <a href="#demos"
                       class="btn btn-custom-md bg-gradient-primary text-white m-t-40 m-b-40 dm-btn">Button 1</a>
                    <a href="#" class="btn btn-custom-md btn-outline-primary m-t-40 m-b-40 m-l-10">Button 2</a>
                </div>
                <div class="col-lg-5  offset-lg-1 text-right">
                    <img class="img-shadow img-fluid" src="{{asset('assets/images/db.jpg')}}" alt="db">
                </div>
            </div>
        </div>

    </section>
    <section class="features-icons spacer bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex mb-4">
                            <i class="fa fa-circle-o  m-auto text-primary"></i>
                        </div>
                        <h3>dolor sit.</h3>
                        <p class="lead mb-0"> Curabitur venenatis dictum felis, quis posuere erat gravida non.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex mb-4">
                            <i class="fa fa-plus m-auto text-primary"></i>
                        </div>
                        <h3>Lorem ipsum</h3>
                        <p class="lead mb-0"> Curabitur venenatis dictum felis, quis posuere erat gravida non.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex mb-4">
                            <i class="fa fa-mobile m-auto text-primary"></i>
                        </div>
                        <h3>Porro quisquam</h3>
                        <p class="lead mb-0"> Curabitur venenatis dictum felis, quis posuere erat gravida non.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row  no-gutters">

                <div class="col-lg-6  order-lg-2 text-white showcase-img"></div>
                <div class="col-lg-6 spacer-all  order-lg-1 my-auto showcase-text">
                    <h2>Maximus molestie urna.</h2>
                    <p class="lead mb-0">WInteger in justo egestas, mattis est varius, elementum arcu. Aenean lacinia, lectus sed vulputate convallis, risus augue tempus neque, varius suscipit elit ante ac quam. Etiam id gravida dui.</p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 text-white showcase-img"></div>
                <div class="col-lg-6 spacer-all  my-auto showcase-text">
                    <h2> Sed placerat consectetur.</h2>
                    <p class="lead mb-0">Integer in justo egestas, mattis est varius, elementum arcu. Aenean lacinia, lectus sed vulputate convallis, risus augue tempus neque, varius suscipit elit ante ac quam. Etiam id gravida dui.</p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img"></div>
                <div class="col-lg-6 spacer-all  order-lg-1 my-auto showcase-text">
                    <h2>Molestie ultrices orci.</h2>
                    <p class="lead mb-0">Integer in justo egestas, mattis est varius, elementum arcu. Aenean lacinia, lectus sed vulputate convallis, risus augue tempus neque, varius suscipit elit ante ac quam. Etiam id gravida dui.</p>
                </div>
            </div>
        </div>
    </section>


@endsection

