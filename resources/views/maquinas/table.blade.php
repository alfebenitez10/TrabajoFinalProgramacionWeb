<div class="table-responsive">
    <table class="table" id="maquinas-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Marca</th>
        <th>Tipo De Maquina</th>
        <th>Funcion</th>
        <th>Estado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($maquinas as $maquinas)
            <tr>
                <td>{{ $maquinas->nombre }}</td>
            <td>{{ $maquinas->marca }}</td>
            <td>{{ $maquinas->tipo_de_maquina }}</td>
            <td>{{ $maquinas->funcion }}</td>
            <td>{{ $maquinas->estado }}</td>
                <td>
                    {!! Form::open(['route' => ['maquinas.destroy', $maquinas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('maquinas.show', [$maquinas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('maquinas.edit', [$maquinas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
