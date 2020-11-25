<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $actividades->id }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $actividades->nombre }}</p>
</div>

<!-- Modalidad Semana Field -->
<div class="form-group">
    {!! Form::label('modalidad_semana', 'Modalidad Semana:') !!}
    <p>{{ $actividades->modalidad_semana }}</p>
</div>

<!-- Empieza Field -->
<div class="form-group">
    {!! Form::label('empieza', 'Empieza:') !!}
    <p>{{ $actividades->empieza }}</p>
</div>

<!-- Acaba Field -->
<div class="form-group">
    {!! Form::label('acaba', 'Acaba:') !!}
    <p>{{ $actividades->acaba }}</p>
</div>

<!-- Cod Entrenadores Field -->
<div class="form-group">
    {!! Form::label('cod_entrenadores', 'Cod Entrenadores:') !!}
    <p>{{ $actividades->cod_entrenadores }}</p>
</div>

