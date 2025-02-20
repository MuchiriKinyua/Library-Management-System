<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="reservations-table">
            <thead>
            <tr>
                <th>Member Id</th>
                <th>Book Id</th>
                <th>Reservation Date</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->member_id }}</td>
                    <td>{{ $reservation->book_id }}</td>
                    <td>{{ $reservation->reservation_date }}</td>
                    <td>{{ $reservation->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['reservations.destroy', $reservation->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('reservations.show', [$reservation->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('reservations.edit', [$reservation->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $reservations])
        </div>
    </div>
</div>
