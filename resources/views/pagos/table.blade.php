<div class="table-responsive">
    <table class="table" id="pagos-table">
        <thead>
            <tr>
                <th>Forma Pago</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pagos as $pagos)
            <tr>
                <td>{{ $pagos->forma_pago }}</td>
                <td>
                    {!! Form::open(['route' => ['pagos.destroy', $pagos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pagos.show', [$pagos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('pagos.edit', [$pagos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
