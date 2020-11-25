<!-- Cod Cliente Field -->
<div class="form-group">
    {!! Form::label('cod_cliente', 'Cod Cliente:') !!}
    <p>{{ $inscribir->cod_cliente }}</p>
</div>

<!-- Cod Actividad Field -->
<div class="form-group">
    {!! Form::label('cod_actividad', 'Cod Actividad:') !!}
    <p>{{ $inscribir->cod_actividad }}</p>
</div>

<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $inscribir->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $inscribir->updated_at }}</p>
</div>