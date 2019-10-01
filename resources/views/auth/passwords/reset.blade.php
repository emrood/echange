@extends('backend.layouts.main')
@section('title') {{ 'Reset Password | '.env('APP_NAME') }} @endsection

@push('before-css')
@endpush

@section('content')
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{asset('assets/images/placeholder/auth-bg.jpg')}}) no-repeat center center;">
        <div class="auth-box">
            <div>
                <div class="logo">
                    <a href="{{asset('/')}}">

                        <span class="d-block"><img src="{{asset('assets/images/logo-icon.png')}}" alt="logo" /></span>
                    <h5 class="font-medium mb-3">Recover Password</h5>
                    </a>
                </div>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">
                        <form method="POST" class="form-horizontal" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">


                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg  @error('email') is-invalid @enderror" type="email" required=""  value="{{ $email ?? old('email') }}"  placeholder="Email" name="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input id="password" type="password" class="form-control form-control-lg   @error('password') is-invalid @enderror" placeholder="New Password" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input id="password_confirmation" type="password" class="form-control form-control-lg   @error('password') is-invalid @enderror" placeholder="Old Password" name="password_confirmation" required autocomplete="new-password">

                                </div>
                            </div>
                            <div class="row form-group text-center">
                                <div class="col-12">
                                    <button class="btn btn-block btn-lg bg-gradient-primary text-white" type="submit">RESET</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
    </script>
@endpush


