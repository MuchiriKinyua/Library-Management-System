<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="authors-table">
            <thead>
            <tr>
                <th>Full Name</th>
                <th>Bio</th>
                <th>Date Of Birth</th>
                <th>Nationality</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($authors as $author)
                <tr>
                    <td>{{ $author->full_name }}</td>
                    <td>{{ $author->bio }}</td>
                    <td>{{ $author->date_of_birth }}</td>
                    <td>{{ $author->nationality }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['authors.destroy', $author->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('authors.show', [$author->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('authors.edit', [$author->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $authors])
        </div>
    </div>
</div>
