<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="books-table">
            <thead>
            <tr>
                <th>Category Id</th>
                <th>Author Id</th>
                <th>Publisher Id</th>
                <th>Title</th>
                <th>Language</th>
                <th>Publication Year</th>
                <th>Edition</th>
                <th>Cover Image</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->category_id }}</td>
                    <td>{{ $book->author_id }}</td>
                    <td>{{ $book->publisher_id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->language }}</td>
                    <td>{{ $book->publication_year }}</td>
                    <td>{{ $book->edition }}</td>
                    <td>{{ $book->cover_image }}</td>
                    <td>{{ $book->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['books.destroy', $book->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('books.show', [$book->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('books.edit', [$book->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $books])
        </div>
    </div>
</div>
