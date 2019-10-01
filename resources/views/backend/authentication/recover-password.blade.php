@extends('backend.layouts.main')
@section('title') {{ 'Login | '.env('APP_NAME') }} @endsection

@push('before-css')
@endpush

@section('content')
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{asset('assets/images/placeholder/auth-bg.jpg')}}) no-repeat center center;">
        <div class="auth-box">
            <div>
                <div class="logo">
                    <span class="d-block"><img src="{{asset('assets/images/logo-icon.png')}}" alt="logo" /></span>
                    <h5 class="font-medium mb-3">Recover Password</h5>
                </div>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg" type="text" required="" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg" type="text" required="" placeholder="Email">
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


