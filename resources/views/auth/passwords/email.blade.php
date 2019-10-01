@extends('backend.layouts.main')
@section('title') {{ 'Forgot Password | '.env('APP_NAME') }} @endsection

@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center"
         style="background:url({{asset('assets/images/placeholder/auth-bg.jpg')}}) no-repeat center center;">
        <div class="auth-box">
            <div id="recoverform" class="d-block">
                <div class="logo">
                    <a href="{{asset('/')}}">
                    <span class="db"><img src="{{asset('assets/images/logo-icon.png')}}" alt="logo"/></span>
                    <h5 class="font-medium m-b-20">Recover Password</h5>
                    </a>
                    <span>Enter your Email and instructions will be sent to you!</span>

                </div>
                <div class="row m-t-20">
                    <!-- Form -->
                    <form class="col-12" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <!-- email -->
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control form-control-lg @error('email') is-invalid @enderror"
                                       type="email" name="email" required="" value="{{ old('email') }}" placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <!-- pwd -->
                        <div class="row m-t-20">
                            <div class="col-12">
                                <button class="btn btn-block btn-lg bg-gradient-primary text-white" type="submit"
                                        name="action">Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
