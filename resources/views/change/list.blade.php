@extends('backend.layouts.app')
@section('title') {{ 'Liste des transactions | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs', ['current' => 'Liste des transactions '])
@endsection

@push('before-css')
@endpush

@php
    setlocale(LC_ALL,"fr_FR");
    setlocale(LC_TIME, "fr_FR");

    $user_array = array();
    foreach ($users as $user){
        $user_array[$user->id] = $user->name;
    }
@endphp

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-10 center-block" style="margin-left: auto; margin-right: auto">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <div class="container-ui">

                            <div class="row pt-3">
                                <div class="col-md-3" style="margin: auto;">
                                    <div class="form-group row">
                                        <label class="control-label col-md-5">Utilisateur</label>
                                        <div class="input-group my-3">
                                            <select name="user_id" class="form-control custom-select">
                                                <option {{ ($user == '*') ? 'selected' : '' }} value="*">Tous</option>
                                                @foreach($users as $u)
                                                    <option value="{{ $u->id }}" {{ ($user_id == $u->id) ? 'selected' : '' }}>{{ $u->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" style="margin: auto;">
                                    <div class="form-group row">
                                        <label class="control-label col-md-5">Devise</label>
                                        <div class="input-group my-3">
                                            <select name="currency_id" class="form-control custom-select">
                                                <option {{ ($currency_id == '*') ? 'selected' : '' }} value="*">Tous</option>
                                                @foreach($currencies as $currency)
                                                    <option {{ ($currency_id == $currency->id) ? 'selected' : '' }} value="{{$currency->id}}">{{ $currency->abbreviation }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4" style="margin: auto;">
                                    <div class="form-group row">
                                        <label class="control-label">Période</label>
                                        <div class="input-daterange input-group my-3" id="date-range">
                                            <input type="text" class="form-control" value="{{ $from_date  }}"
                                                   name="start"/>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-info b-0 text-white">Au</span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $to_date }}" name="end"/>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-10 center-block" style="margin-left: auto; margin-right: auto">
                <div class="card">
                    <div class="card-body">

                        {{--<h4 class="card-title">Table Header</h4>--}}
                        {{--<h6 class="card-subtitle">Similar to tables, use the modifier classes .thead-light to--}}
                        {{--make <code>&lt;thead&gt;</code>s appear light.</h6>--}}
                    </div>
                    <div class="table-responsive">
                        <table class="table table-changes">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <!-- This Page JS -->
    <script src="{{asset('assets/libs/moment/moment.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script>
        // Date Picker
        jQuery('.mydatepicker, #datepicker, .input-group.date').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#date-range').datepicker({
            toggleActive: true
        });
        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true
        });
    </script>
@endpush
