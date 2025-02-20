<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="copies-table">
            <thead>
            <tr>
                <th>Book Id</th>
                <th>Shelf Location</th>
                <th>Barcode</th>
                <th>Status</th>
                <th>Book Condition</th>
                <th>Added By</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($copies as $copy)
                <tr>
                    <td>{{ $copy->book_id }}</td>
                    <td>{{ $copy->shelf_location }}</td>
                    <td>{{ $copy->barcode }}</td>
                    <td>{{ $copy->status }}</td>
                    <td>{{ $copy->book_condition }}</td>
                    <td>{{ $copy->added_by }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['copies.destroy', $copy->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('copies.show', [$copy->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('copies.edit', [$copy->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $copies])
        </div>
    </div>
</div>
