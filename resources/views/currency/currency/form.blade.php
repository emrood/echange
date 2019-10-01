<div class="form-group {{ $errors->has('test') ? 'has-error' : ''}}">
    {!! Form::label('test', 'Test', ['class' => 'control-label']) !!}
    {!! Form::text('test', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('test', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
 <a href="{{ url('/%%routeGroup%%%%viewName%%') }}" title="Back"><button class="btn btn-danger btn-sm mr-5"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary btn-sm']) !!}
</div>
