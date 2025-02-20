<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="records-table">
            <thead>
            <tr>
                <th>Member Id</th>
                <th>Book Copy Id</th>
                <th>Transaction Type</th>
                <th>Issued By</th>
                <th>Issued At</th>
                <th>Due Date</th>
                <th>Returned At</th>
                <th>Fine Amount</th>
                <th>Fine Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($records as $record)
                <tr>
                    <td>{{ $record->member_id }}</td>
                    <td>{{ $record->book_copy_id }}</td>
                    <td>{{ $record->transaction_type }}</td>
                    <td>{{ $record->issued_by }}</td>
                    <td>{{ $record->issued_at }}</td>
                    <td>{{ $record->due_date }}</td>
                    <td>{{ $record->returned_at }}</td>
                    <td>{{ $record->fine_amount }}</td>
                    <td>{{ $record->fine_status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['records.destroy', $record->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('records.show', [$record->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('records.edit', [$record->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $records])
        </div>
    </div>
</div>
