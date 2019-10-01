@extends('backend.layouts.app')
@section('title') {{ 'Form Colorpicker | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Form Colorpicker'])
@endsection

@push('before-css')
    <!-- This Page CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/@claviska/jquery-minicolors/jquery.minicolors.css')}}">@endpush
@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Control Types</h4>
                        <div class="form-group">
                            <label for="hue-demo">Hue (default)</label>
                            <input type="text" id="hue-demo" class="form-control demo" data-control="hue" value="#ff6161">
                        </div>
                        <div class="form-group">
                            <label for="saturation-demo">Saturation</label>
                            <input type="text" id="saturation-demo" class="form-control demo" data-control="saturation"
                                   value="#0088cc">
                        </div>
                        <div class="form-group">
                            <label for="brightness-demo">Brightness</label>
                            <input type="text" id="brightness-demo" class="form-control demo" data-control="brightness"
                                   value="#00ffff">
                        </div>
                        <div class="form-group">
                            <label for="wheel-demo">Wheel</label>
                            <input type="text" id="wheel-demo" class="form-control demo" data-control="wheel"
                                   value="#ff99ee">
                        </div>
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
    <script src="{{asset('assets/libs/jquery-asColor/dist/jquery-asColor.min.js')}}"></script>
    <script src="{{asset('assets/libs/jquery-asGradient/dist/jquery-asGradient.js')}}"></script>
    <script src="{{asset('assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js')}}"></script>
    <script src="{{asset('assets/libs/@claviska/jquery-minicolors/jquery.minicolors.min.js')}}"></script>
    <script>
        $('.demo').each(function () {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                defaultValue: $(this).attr('data-defaultValue') || '',
                format: $(this).attr('data-format') || 'hex',
                keywords: $(this).attr('data-keywords') || '',
                inline: $(this).attr('data-inline') === 'true',
                letterCase: $(this).attr('data-letterCase') || 'lowercase',
                opacity: $(this).attr('data-opacity'),
                position: $(this).attr('data-position') || 'bottom left',
                swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
                change: function (value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
    </script>
@endpush