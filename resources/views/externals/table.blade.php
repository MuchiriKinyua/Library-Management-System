<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="externals-table">
            <thead>
            <tr>
                <th>Full Name</th>
                <th>Api Url</th>
                <th>Api Key</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($externals as $external)
                <tr>
                    <td>{{ $external->full_name }}</td>
                    <td>{{ $external->api_url }}</td>
                    <td>{{ $external->api_key }}</td>
                    <td>{{ $external->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['externals.destroy', $external->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('externals.show', [$external->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('externals.edit', [$external->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $externals])
        </div>
    </div>
</div>
