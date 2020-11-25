<div class="table-responsive">
    <table class="table" id="realizars-table">
        <thead>
            <tr>
                <th>Cod Registro</th>
        <th>Cod Actividad</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($realizars as $realizar)
            <tr>
                <td>{{ $realizar->cod_registro }}</td>
            <td>{{ $realizar->cod_actividad }}</td>
                <td>
                    {!! Form::open(['route' => ['realizars.destroy', $realizar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('realizars.show', [$realizar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('realizars.edit', [$realizar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
