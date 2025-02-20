<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="publishers-table">
            <thead>
            <tr>
                <th>Full Name</th>
                <th>Contact Info</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($publishers as $publisher)
                <tr>
                    <td>{{ $publisher->full_name }}</td>
                    <td>{{ $publisher->contact_info }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['publishers.destroy', $publisher->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('publishers.show', [$publisher->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('publishers.edit', [$publisher->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $publishers])
        </div>
    </div>
</div>
