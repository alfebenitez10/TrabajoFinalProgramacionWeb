<!-- Cod Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_cliente', 'Cod Cliente:') !!}
    {!! Form::text('cod_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Cod Actividad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_actividad', 'Cod Actividad:') !!}
    {!! Form::text('cod_actividad', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('inscribirs.index') }}" class="btn btn-default">Cancel</a>
</div>
