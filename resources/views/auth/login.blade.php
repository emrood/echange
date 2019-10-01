@extends('backend.layouts.main')
@section('title') {{ 'Login | '.env('APP_NAME') }} @endsection

@push('before-css')
@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{asset('assets/images/placeholder/auth-bg.jpg')}}) no-repeat center center;">
        <div class="auth-box">
            <div id="loginform">
                <div class="logo">
                    <span class="db"><img src="{{asset('assets/images/logo-icon.png')}}" alt="logo" /></span>
                    <h5 class="font-medium m-b-20">Sign In to Mendy Admin</h5>
                </div>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">
                        <form class="form-horizontal mt-3" method="POST" action="{{ route('login') }}" id="loginform">
                            @csrf

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                </div>
                                <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror form-control-lg" placeholder="Email"
                                       aria-label="Email" aria-describedby="basic-addon1" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                </div>
                                <input type="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" placeholder="Password"
                                       aria-label="Password" name="password"  aria-describedby="basic-addon1">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>


                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input" id="remember">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" id="to-recover" class="text-dark float-right"><i
                                                    class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <div class="col-xs-12 p-b-20">
                                    <button class="btn btn-block btn-lg bg-gradient-primary text-white" type="submit">Log
                                        In</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                    <div class="social">
                                        <a href="{{url('auth/facebook')}}"  class="btn  btn-facebook" data-toggle="tooltip"
                                           title="" data-original-title="Login with Facebook"> <i aria-hidden="true"
                                                                                                  class="fab  fa-facebook"></i> </a>
                                        <a href="{{url('auth/google')}}"  class="btn btn-googleplus" data-toggle="tooltip"
                                           title="" data-original-title="Login with Google"> <i aria-hidden="true"
                                                                                                class="fab  fa-google-plus"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-b-0 m-t-10">
                                <div class="col-sm-12 text-center">
                                    Don't have an account? <a href="{{asset('register')}}" class="text-info m-l-5"><b>Sign
                                            Up</b></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
@endsection
@push('js')
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
    </script>
@endpush
