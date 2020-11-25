<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $maquinas->id }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $maquinas->nombre }}</p>
</div>

<!-- Marca Field -->
<div class="form-group">
    {!! Form::label('marca', 'Marca:') !!}
    <p>{{ $maquinas->marca }}</p>
</div>

<!-- Tipo De Maquina Field -->
<div class="form-group">
    {!! Form::label('tipo_de_maquina', 'Tipo De Maquina:') !!}
    <p>{{ $maquinas->tipo_de_maquina }}</p>
</div>

<!-- Funcion Field -->
<div class="form-group">
    {!! Form::label('funcion', 'Funcion:') !!}
    <p>{{ $maquinas->funcion }}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $maquinas->estado }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $maquinas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $maquinas->updated_at }}</p>
</div>

