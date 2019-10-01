@extends('backend.layouts.app')
@section('title') {{ 'View RateHistory  | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'View RateHistory #'.$ratehistory->id])
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
                        <a href="{{ url('/history/rate-history') }}" title="Back"><button class="btn btn-warning mr-3 btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/history/rate-history/' . $ratehistory->id . '/edit') }}" title="Edit RateHistory"><button class="btn btn-primary btn-sm mr-3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['history/ratehistory', $ratehistory->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete RateHistory',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $ratehistory->id }}</td>
                                    </tr>
                                    <tr><th> User Id </th><td> {{ $ratehistory->user_id }} </td></tr><tr><th> Currency Id </th><td> {{ $ratehistory->currency_id }} </td></tr><tr><th> Sale Rate </th><td> {{ $ratehistory->sale_rate }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
