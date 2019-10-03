<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::label('user_id', 'User Id', ['class' => 'control-label']) !!}
    {!! Form::number('user_id', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('currency_id') ? 'has-error' : ''}}">
    {!! Form::label('currency_id', 'Currency Id', ['class' => 'control-label']) !!}
    {!! Form::number('currency_id', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('currency_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sale_rate') ? 'has-error' : ''}}">
    {!! Form::label('sale_rate', 'Sale Rate', ['class' => 'control-label']) !!}
    {!! Form::number('sale_rate', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('sale_rate', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('purchase_rate') ? 'has-error' : ''}}">
    {!! Form::label('purchase_rate', 'Purchase Rate', ['class' => 'control-label']) !!}
    {!! Form::number('purchase_rate', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('purchase_rate', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
    {!! Form::label('date', 'Date', ['class' => 'control-label']) !!}
    {!! Form::date('date', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
 <a href="{{ url('/%%routeGroup%%%%viewName%%') }}" title="Back"><button class="btn btn-danger btn-sm mr-5"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-info btn-sm']) !!}
</div>
