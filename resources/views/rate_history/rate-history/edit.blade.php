@extends('backend.layouts.app')
@section('title') {{ 'Edit RateHistory | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Edit RateHistory #'.$ratehistory->id ])
@endsection

@push('before-css')

@endpush
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($ratehistory, [
                            'method' => 'PATCH',
                            'url' => ['/history/rate-history', $ratehistory->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('rate_history.rate-history.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
