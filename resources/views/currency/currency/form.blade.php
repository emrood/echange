<div class="form-group {{ $errors->has('abbreviation') ? 'has-error' : ''}}">
    {!! Form::label('Abbreviation', 'Abbreviation', ['class' => 'control-label']) !!}
    {!! Form::text('abbreviation', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('abbreviation', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('sale_rate') ? 'has-error' : ''}}">
 {!! Form::label('Taux de vente', 'Taux de vente', ['class' => 'control-label']) !!}
 {!! Form::number('sale_rate', 0.00, ['step' => 0.01, 'min' => 0.00, 'class' => 'form-control', 'required' => 'required']) !!}
 {!! $errors->first('sale_rate', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('purchase_rate') ? 'has-error' : ''}}">
 {!! Form::label("Taux d'achat", "Taux d'achat", ['class' => 'control-label']) !!}
 {!! Form::number('purchase_rate', 0.00,  ['step' => 0.01, 'min' => 0.00, 'class' => 'form-control', 'required' => 'required']) !!}
 {!! $errors->first('purchase_rate', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
 <a href="{{ url('/%%routeGroup%%%%viewName%%') }}" title="Back"><button class="btn btn-danger btn-sm mr-5"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>

    {!! Form::submit($formMode === 'edit' ? 'Mettre a jour' : 'Créer', ['class' => 'btn btn-info btn-sm']) !!}
</div>
