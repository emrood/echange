@extends('backend.layouts.main')
@section('title') {{ 'ERROR 403 | '.env('APP_NAME') }} @endsection

@push('before-css')
@endpush

@section('content')
    <div class="error-box">
        <div class="error-body text-center">
            <h1 class="error-title">403</h1>
            <h3 class="text-uppercase error-subtitle">FORBIDDON ERROR!</h3>
            <p class="text-muted my-4">YOU DON'T HAVE PERMISSION TO ACCESS ON THIS SERVER.</p>
            <a href="{{asset('/')}}" class="btn bg-gradient-primary text-white btn-rounded waves-effect waves-light mb-5">Back
                to home</a>
        </div>
    </div>

@endsection

@push('js')
    <!-- This Page JS -->
    <script>
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
    </script>
@endpush

