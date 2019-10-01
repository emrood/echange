@extends('backend.layouts.main')
@section('title') {{ 'Lock Screen | '.env('APP_NAME') }} @endsection

@push('before-css')
@endpush

@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{asset('assets/images/placeholder/auth-bg.jpg')}}) no-repeat center center;">
        <div class="auth-box">
            <div>
                <div class="logo">
                    <span class="d-block"><img alt="thumbnail" class="rounded-circle" width="100" src="https://via.placeholder.com/200x200?text=user"></span>
                    <h5 class="font-medium my-3">Brie</h5>
                </div>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg" type="password" required
                                           placeholder="Password">
                                </div>
                            </div>
                            <div class="row form-group text-center">
                                <div class="col-12">
                                    <button class="btn btn-block btn-lg bg-gradient-primary text-white" type="submit">LOGIN</button>
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
    <!-- This Page JS -->

@endpush
