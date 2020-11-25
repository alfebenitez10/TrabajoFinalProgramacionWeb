<div class="table-responsive">
    <table class="table" id="registros-table">
        <thead>
            <tr>
                <th>Hora Entrada</th>
        <th>Hora Salida</th>
        <th>Id Cliente</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($registros as $registros)
            <tr>
                <td>{{ $registros->hora_entrada }}</td>
            <td>{{ $registros->hora_salida }}</td>
            <td>{{ $registros->id_cliente }}</td>
                <td>
                    {!! Form::open(['route' => ['registros.destroy', $registros->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('registros.show', [$registros->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('registros.edit', [$registros->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
