<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="notifications-table">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Message</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($notifications as $notification)
                <tr>
                    <td>{{ $notification->user_id }}</td>
                    <td>{{ $notification->message }}</td>
                    <td>{{ $notification->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['notifications.destroy', $notification->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('notifications.show', [$notification->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('notifications.edit', [$notification->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $notifications])
        </div>
    </div>
</div>
