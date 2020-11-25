<div class="table-responsive">
    <table class="table" id="inscribirs-table">
        <thead>
            <tr>
                <th>Cod Cliente</th>
        <th>Cod Actividad</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($inscribirs as $inscribir)
            <tr>
                <td>{{ $inscribir->cod_cliente }}</td>
            <td>{{ $inscribir->cod_actividad }}</td>
                <td>
                    {!! Form::open(['route' => ['inscribirs.destroy', $inscribir->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('inscribirs.show', [$inscribir->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('inscribirs.edit', [$inscribir->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
