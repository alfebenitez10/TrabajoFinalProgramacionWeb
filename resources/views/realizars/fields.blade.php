<!-- Cod Registro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_registro', 'Cod Registro:') !!}
    {!! Form::text('cod_registro', null, ['class' => 'form-control']) !!}
</div>

<!-- Cod Actividad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_actividad', 'Cod Actividad:') !!}
    {!! Form::text('cod_actividad', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('realizars.index') }}" class="btn btn-default">Cancel</a>
</div>
