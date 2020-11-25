<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $registros->id }}</p>
</div>

<!-- Hora Entrada Field -->
<div class="form-group">
    {!! Form::label('hora_entrada', 'Hora Entrada:') !!}
    <p>{{ $registros->hora_entrada }}</p>
</div>

<!-- Hora Salida Field -->
<div class="form-group">
    {!! Form::label('hora_salida', 'Hora Salida:') !!}
    <p>{{ $registros->hora_salida }}</p>
</div>

<!-- Id Cliente Field -->
<div class="form-group">
    {!! Form::label('id_cliente', 'Id Cliente:') !!}
    <p>{{ $registros->id_cliente }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $registros->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $registros->updated_at }}</p>
</div>

