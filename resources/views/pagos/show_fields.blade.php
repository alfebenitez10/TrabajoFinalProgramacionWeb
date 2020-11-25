<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $pagos->id }}</p>
</div>

<!-- Forma Pago Field -->
<div class="form-group">
    {!! Form::label('forma_pago', 'Forma Pago:') !!}
    <p>{{ $pagos->forma_pago }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pagos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pagos->updated_at }}</p>
</div>

