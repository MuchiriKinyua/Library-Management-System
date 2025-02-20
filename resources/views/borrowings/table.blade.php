<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="borrowings-table">
            <thead>
            <tr>
                <th>Member Id</th>
                <th>Book Copy Id</th>
                <th>Issued By</th>
                <th>Issue Date</th>
                <th>Due Date</th>
                <th>Return Date</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($borrowings as $borrowing)
                <tr>
                    <td>{{ $borrowing->member_id }}</td>
                    <td>{{ $borrowing->book_copy_id }}</td>
                    <td>{{ $borrowing->issued_by }}</td>
                    <td>{{ $borrowing->issue_date }}</td>
                    <td>{{ $borrowing->due_date }}</td>
                    <td>{{ $borrowing->return_date }}</td>
                    <td>{{ $borrowing->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['borrowings.destroy', $borrowing->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('borrowings.show', [$borrowing->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('borrowings.edit', [$borrowing->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $borrowings])
        </div>
    </div>
</div>
