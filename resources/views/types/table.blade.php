<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="types-table">
            <thead>
            <tr>
                <th>Full Name</th>
                <th>Borrow Limit</th>
                <th>Duration In Days</th>
                <th>Fee</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($types as $type)
                <tr>
                    <td>{{ $type->full_name }}</td>
                    <td>{{ $type->borrow_limit }}</td>
                    <td>{{ $type->duration_in_days }}</td>
                    <td>{{ $type->fee }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['types.destroy', $type->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('types.show', [$type->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('types.edit', [$type->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $types])
        </div>
    </div>
</div>
