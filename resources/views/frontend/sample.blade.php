@extends('layouts.app')
@section('title') {{ 'Sample | '.env('APP_NAME') }} @endsection

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
                <div class="col-lg-12">
                    <h2> Sample Page</h2>
                    <p class="m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo mauris, dapibus vel enim nec, euismod accumsan augue. Sed consequat neque magna, nec malesuada orci aliquet sit amet. Curabitur tincidunt sapien dui, sit amet viverra arcu tempus ut. Phasellus malesuada ligula eget turpis elementum, fringilla porta erat lacinia. Quisque mollis odio sed sagittis tempor. Vivamus bibendum scelerisque mattis. Donec sodales tristique semper.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

