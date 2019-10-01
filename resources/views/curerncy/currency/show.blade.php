@extends('backend.layouts.app')
@section('title') {{ 'View Currency  | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'View Currency #'.$currency->id])
@endsection

@push('before-css')

@endpush


@section('content')
    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                    <div class="card-body">
                        <a href="{{ url('/currency/currency') }}" title="Back"><button class="btn btn-warning mr-3 btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/currency/currency/' . $currency->id . '/edit') }}" title="Edit Currency"><button class="btn btn-primary btn-sm mr-3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['currency/currency', $currency->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Currency',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $currency->id }}</td>
                                    </tr>
                                    <tr><th> Abbreviation </th><td> {{ $currency->abbreviation }} </td></tr><tr><th> Sale Rate </th><td> {{ $currency->sale_rate }} </td></tr><tr><th> Purchase Rate </th><td> {{ $currency->purchase_rate }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
