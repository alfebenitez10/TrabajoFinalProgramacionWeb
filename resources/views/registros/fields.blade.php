<!-- Hora Entrada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_entrada', 'Hora Entrada:') !!}
    {!! Form::text('hora_entrada', null, ['class' => 'form-control','id'=>'hora_entrada']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#hora_entrada').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Hora Salida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_salida', 'Hora Salida:') !!}
    {!! Form::text('hora_salida', null, ['class' => 'form-control','id'=>'hora_salida']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#hora_salida').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Id Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cliente', 'Id Cliente:') !!}
    {!! Form::number('id_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('registros.index') }}" class="btn btn-default">Cancel</a>
</div>
