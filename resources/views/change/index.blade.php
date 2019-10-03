@extends('backend.layouts.app')
@section('title') {{ 'Transaction de change | '.env('APP_NAME') }} @endsection

{{--@section('breadcrumbs')--}}
{{--@include('backend.layouts.partials.breadcrumbs', ['current' => 'Transaction de change'])--}}
{{--@endsection--}}

@push('before-css')
@endpush

@php
    setlocale(LC_ALL,"fr_FR");
    setlocale(LC_TIME, "fr_FR");
@endphp

@section('content')
    <div class="container-fluid"
         style="background:url({{asset('assets/images/placeholder/auth5.jpg')}}) no-repeat center center; background-size:cover;">
        @if($cashFund != null)
            <div class="row">
                <!-- If user has starting fund-->
                <div class="col-md-8 center-block" style="margin-left: auto; margin-right: auto">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            {!! Form::open(['url' => '/change', 'class' => 'form-horizontal', 'files' => true]) !!}
                            <div class="form-group {{ $errors->has('cashier_id') ? 'has-error' : ''}}">
                                {!! Form::label('Type de transaction', 'Type', ['class' => 'control-label']) !!}
                                {!! Form::select('change_type', $array_currency, 2, ['class'=>'form-control custom-select text-center', 'required' => 'required', 'id' => 'input_change_type']) !!}
                                {!! $errors->first('cashier_id', '<p class="help-block">:message</p>') !!}
                            </div>

                            <hr style="color: rgb(53,53,86); background: rgb(53,53,86); margin-top: 40px; margin-bottom: 40px;"/>
                            {!! Form::label('Montant reçu', 'Montant reçu', ['class' => 'control-label']) !!}
                            <div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
                                <div>
                                    <div class="input-group">
                                        <input type="number" step="0.0" min="0.0" value="0.0" class="form-control"
                                               placeholder="" aria-label=""
                                               aria-describedby="basic-addon1"
                                               name="change_amount" id="input_received">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-info" type="button"><span class="fa fa-dollar-sign"
                                                                                             id="currency_sign"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
                            </div>

                            {!! Form::label('Montant a rendre', 'Montant a rendre', ['class' => 'control-label']) !!}
                            <div class="form-group {{ $errors->has('to_give') ? 'has-error' : ''}}">
                                <div>
                                    <div class="input-group">
                                        <input type="number" disabled="disabled" step="0.0" min="0.0" value="0.0"
                                               class="form-control"
                                               placeholder="" aria-label=""
                                               aria-describedby="basic-addon1"
                                               name="to_give" id="input_to_give">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-info" type="button">HTG</button>
                                        </div>
                                    </div>
                                </div>
                                {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('Imprimer', 'Imprimer', ['class' => 'control-label pull-right']) !!}
                                {!! Form::checkbox('print', true) !!}
                            </div>

                            <div class="form-group text-center">
                                {!! Form::submit('Enregistrer', ['class' => 'btn btn-danger btn-md pull-right']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <div class="card-footer">
                            {{--<span>Fond de caisse pour le {{  strftime("%e %B %Y", strtotime(\Carbon\Carbon::today()->toDateString()))   }}</span>--}}
                        </div>
                    </div>
                </div>

            </div>
            <!-- else -->
        @else
            <h2 class="text-center">Aucun fond de caisse enregistré</h2>
        @endif
    </div>
@endsection
@push('js')
    <script src="{{ asset('js/change.js') }}"></script>
@endpush

