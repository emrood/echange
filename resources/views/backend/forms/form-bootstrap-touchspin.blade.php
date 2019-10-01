@extends('backend.layouts.app')
@section('title') {{ 'Bootstrap Touchspin | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Bootstrap Touchspin'])
@endsection

@push('before-css')
    <!-- This Page CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}">
@endpush
@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <p>We have used thirdparty plugin js of bootstrap touchspin and you can find the official website here:
            <a href="https://www.virtuosoft.eu/code/bootstrap-touchspin/">Bootstrap Touchspin</a></p>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Normal Touchspin</h4>
                        <form class="mt-4">
                            <input id="demo3" type="text" value="-1" name="demo3">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Postfix Touchspin</h4>
                        <form class="mt-4">
                            <input id="demo1" type="text" value="55" name="demo1">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Prefix Touchspin</h4>
                        <form class="mt-4">
                            <div class="form-group">
                                <input id="demo2" type="text" value="0" name="demo2" class="col-md-8 form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Vertical button alignment</h4>
                        <form class="mt-4">
                            <div class="form-group">
                                <input id="demo_vertical" type="text" value="" name="demo_vertical">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection
@push('js')
    <!-- This Page JS -->
    <script src="{{asset('assets/libs/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script>
        $("input[name='demo3']").TouchSpin();
        $("input[name='demo1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='demo2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='demo_vertical']").TouchSpin({
            verticalbuttons: true
        });
    </script>
@endpush


