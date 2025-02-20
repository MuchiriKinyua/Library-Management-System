<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="resources-table">
            <thead>
            <tr>
                <th>Author Id</th>
                <th>Category Id</th>
                <th>Title</th>
                <th>Type</th>
                <th>Access Type</th>
                <th>File Url</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($resources as $resource)
                <tr>
                    <td>{{ $resource->author_id }}</td>
                    <td>{{ $resource->category_id }}</td>
                    <td>{{ $resource->title }}</td>
                    <td>{{ $resource->type }}</td>
                    <td>{{ $resource->access_type }}</td>
                    <td>{{ $resource->file_url }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['resources.destroy', $resource->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('resources.show', [$resource->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('resources.edit', [$resource->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $resources])
        </div>
    </div>
</div>
