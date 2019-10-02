@extends('backend.layouts.app')
@section('title') {{ 'Créer une devise | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Créer une devise'])
@endsection

@push('before-css')
@endpush

@php
    setlocale(LC_ALL,"fr_FR");
    setlocale(LC_TIME, "fr_FR");
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

                        {!! Form::open(['url' => '/currency', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('currency.currency.form', ['formMode' => 'create'])

                        {!! Form::close() !!}

                    </div>
                    <div class="card-footer">
                        <span>Ce taux sera appliqué pour le {{  strftime("%e %B %Y", strtotime(\Carbon\Carbon::today()->toDateString()))   }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
