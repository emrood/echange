<div class="form-group {{ $errors->has('abbreviation') ? 'has-error' : ''}}">
    {!! Form::label('abbreviation', 'Abbreviation', ['class' => 'control-label']) !!}
    {!! Form::text('abbreviation', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('abbreviation', '<p class="help-block">:message</p>') !!}
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
<div class="form-group {{ $errors->has('editable') ? 'has-error' : ''}}">
    {!! Form::label('editable', 'Editable', ['class' => 'control-label']) !!}
    <div class="checkbox">
    <label>{!! Form::radio('editable', '1') !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('editable', '0', true) !!} No</label>
</div>
    {!! $errors->first('editable', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('is_references') ? 'has-error' : ''}}">
    {!! Form::label('is_references', 'Is References', ['class' => 'control-label']) !!}
    <div class="checkbox">
    <label>{!! Form::radio('is_references', '1') !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('is_references', '0', true) !!} No</label>
</div>
    {!! $errors->first('is_references', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
 <a href="{{ url('/%%routeGroup%%%%viewName%%') }}" title="Back"><button class="btn btn-danger btn-sm mr-5"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary btn-sm']) !!}
</div>
