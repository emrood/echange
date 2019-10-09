@extends('backend.layouts.app')
@section('title') {{ 'Faire un dépot | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs', ['current' => 'Faire un dépot'])
@endsection

@push('before-css')
@endpush

@php
    setlocale(LC_ALL,"fr_FR");
    setlocale(LC_TIME, "fr_FR");

    $user_array = array();

    if(Auth::user()->isAdmin()){
        foreach ($users as $user){
            $user_array[$user->id] = $user->name;
        }
    }else{
        foreach ($users->where('id', '!=', Auth::user()->id) as $user){
            $user_array[$user->id] = $user->name;
        }
    }
@endphp

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 center-block" style="margin-left: auto; margin-right: auto">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/cash-fund/deposit/save', 'class' => 'form-horizontal', 'files' => true]) !!}

                        <div class="form-group {{ $errors->has('cashier_id') ? 'has-error' : ''}}">
                            {!! Form::label('Caissier', 'Caissier', ['class' => 'control-label']) !!}
                            {!! Form::select('cashier_id', $user_array, null, ['class'=>'form-control custom-select', 'placeholder'=>'Selectionner un caissier', 'required' => 'required']) !!}
                            {!! $errors->first('cashier_id', '<p class="help-block">:message</p>') !!}
                        </div>

                        <hr style="color: rgb(53,53,86); background: rgb(53,53,86)"/>
                        {!! Form::label('Montants de départ', 'Montants de départ', ['class' => 'control-label']) !!}


                        @foreach($currencies as $currency)
                            <div class="form-group {{ $errors->has('currency_amount') ? 'has-error' : ''}}">
                                <div>
                                    <div class="input-group">
                                        <input type="number" step="0.0" min="0.0" value="0.0" class="form-control"
                                               placeholder="" aria-label=""
                                               aria-describedby="basic-addon1"
                                               name="currency_amount[{{$currency->id}}]">
                                        <div class="input-group-append">
                                            <button class="btn btn-info"
                                                    type="button">{{ strtoupper($currency->abbreviation) }}</button>
                                        </div>
                                    </div>
                                </div>
                                {!! $errors->first('currency_amount', '<p class="help-block">:message</p>') !!}
                            </div>
                        @endforeach

                        {{--<div class="form-group">--}}
                            {{--{!! Form::label('Imprimer', 'Imprimer', ['class' => 'control-label pull-right']) !!}--}}
                            {{--{!! Form::checkbox('print', true) !!}--}}
                        {{--</div>--}}

                        <div class="form-group">
                            <a href="{{ url('/cash-fund') }}" class="btn btn-dark btn-sm mr-5" title="Back">
                               <i class="fa fa-arrow-left" aria-hidden="true"></i> Retour
                            </a>
                            {!! Form::submit('Enregistrer', ['class' => 'btn btn-info btn-sm pull-right']) !!}
                        </div>
                        {!! Form::close() !!}

                    </div>
                    <div class="card-footer">
                        <span>Fond de caisse pour le {{  strftime("%e %B %Y", strtotime(\Carbon\Carbon::today()->toDateString()))   }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
