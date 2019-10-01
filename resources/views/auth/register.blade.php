@extends('backend.layouts.main')
@section('title') {{ 'Register | '.env('APP_NAME') }} @endsection

@push('before-css')
@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center"
         style="background:url({{asset('assets/images/placeholder/auth-bg.jpg')}}) no-repeat center center;">
        <div class="auth-box">
            <div>
                <div class="logo">
                    <span class="d-block"><img src="{{asset('assets/images/logo-icon.png')}}" alt="logo"/></span>
                    <h5 class="font-medium mb-3">Sign Up to Mendy Admin</h5>
                </div>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">
                        <form method="POST" class="form-horizontal" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg @error('name') is-invalid @enderror"
                                           type="text" name="name" value="{{ old('name') }}" required=" "
                                           placeholder="Name">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg @error('email') is-invalid @enderror"
                                           type="email" name="email" required=" "
                                           placeholder="Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg @error('password') is-invalid @enderror"
                                           name="password" type="password" required=" "
                                           placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg" id="password-confirm" type="password"
                                           required=" " name="password_confirmation"
                                           placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 ">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">I agree to all <a
                                                    href="javascript:void(0)" class="link">Terms</a></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group text-center">
                                <div class="col-12">
                                    <button class="btn btn-block btn-lg bg-gradient-primary text-white" type="submit">
                                        SIGN
                                        UP
                                    </button>
                                </div>
                            </div>
                            <div class="row form-group mb-0 mt-2">
                                <div class="col-12 text-center ">
                                    Already have an account? <a href="{{asset('login')}}" class="text-primary ml-1"><b>Sign
                                            In</b></a>
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
    <script>
        $('[data-toggle="tooltip "]').tooltip();
        $(".preloader ").fadeOut();
    </script>
@endpush
