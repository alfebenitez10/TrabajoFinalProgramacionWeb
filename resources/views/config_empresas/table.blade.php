<div class="table-responsive">
    <table class="table" id="configEmpresas-table">
        <thead>
            <tr>
                <th>Nit</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Logo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($configEmpresas as $configEmpresa)
            <tr>
                <td>{{ $configEmpresa->nit }}</td>
            <td>{{ $configEmpresa->nombre }}</td>
            <td>{{ $configEmpresa->telefono }}</td>
            <td>{{ $configEmpresa->direccion }}</td>
            <td>{{ $configEmpresa->logo }}</td>
                <td>
                    {!! Form::open(['route' => ['configEmpresas.destroy', $configEmpresa->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('configEmpresas.show', [$configEmpresa->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('configEmpresas.edit', [$configEmpresa->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
