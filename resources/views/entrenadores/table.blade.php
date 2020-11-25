<div class="table-responsive">
    <table class="table" id="entrenadores-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Apellidos</th>
        <th>Direccion</th>
        <th>Telefono</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($entrenadores as $entrenadores)
            <tr>
                <td>{{ $entrenadores->nombre }}</td>
            <td>{{ $entrenadores->apellidos }}</td>
            <td>{{ $entrenadores->direccion }}</td>
            <td>{{ $entrenadores->telefono }}</td>
                <td>
                    {!! Form::open(['route' => ['entrenadores.destroy', $entrenadores->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('entrenadores.show', [$entrenadores->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('entrenadores.edit', [$entrenadores->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
