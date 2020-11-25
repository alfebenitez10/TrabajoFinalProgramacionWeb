<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Modalidad Semana Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modalidad_semana', 'Modalidad Semana:') !!}
    {!! Form::text('modalidad_semana', null, ['class' => 'form-control']) !!}
</div>

<!-- Empieza Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empieza', 'Empieza:') !!}
    {!! Form::text('empieza', null, ['class' => 'form-control']) !!}
</div>

<!-- Acaba Field -->
<div class="form-group col-sm-6">
    {!! Form::label('acaba', 'Acaba:') !!}
    {!! Form::text('acaba', null, ['class' => 'form-control']) !!}
</div>

<!-- Cod Entrenadores Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_entrenadores', 'Cod Entrenadores:') !!}
    {!! Form::text('cod_entrenadores', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('actividades.index') }}" class="btn btn-default">Cancel</a>
</div>
