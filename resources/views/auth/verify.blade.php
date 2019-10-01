@extends('backend.layouts.main')
@section('title') {{ 'Verify | '.env('APP_NAME') }} @endsection

@push('before-css')
@endpush

@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center"
         style="background:url({{asset('assets/images/placeholder/auth-bg.jpg')}}) no-repeat center center;">
        <div class="auth-box">
            <div id="loginform">
                <div class="logo">
                    <a href="{{asset('/')}}">
                    <span class="db"><img src="{{asset('assets/images/logo-icon.png')}}" alt="logo"/></span>
                    <h5 class="font-medium m-b-20">{{ __('Verify Your Email Address') }}</h5>
                    </a>
                </div>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">

                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif


                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }}, <a
                                href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
