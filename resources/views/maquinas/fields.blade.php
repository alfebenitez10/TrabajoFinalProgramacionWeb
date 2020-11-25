<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Marca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marca', 'Marca:') !!}
    {!! Form::text('marca', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo De Maquina Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_de_maquina', 'Tipo De Maquina:') !!}
    {!! Form::text('tipo_de_maquina', null, ['class' => 'form-control']) !!}
</div>

<!-- Funcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('funcion', 'Funcion:') !!}
    {!! Form::text('funcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('maquinas.index') }}" class="btn btn-default">Cancel</a>
</div>
