<!-- Forma Pago Field -->
<div class="form-group col-sm-6">
    {!! Form::label('forma_pago', 'Forma Pago:') !!}
    {!! Form::text('forma_pago', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pagos.index') }}" class="btn btn-default">Cancel</a>
</div>
