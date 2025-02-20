<!-- Member Id Field -->
<div class="col-sm-12">
    {!! Form::label('member_id', 'Member Id:') !!}
    <p>{{ $reservation->member_id }}</p>
</div>

<!-- Book Id Field -->
<div class="col-sm-12">
    {!! Form::label('book_id', 'Book Id:') !!}
    <p>{{ $reservation->book_id }}</p>
</div>

<!-- Reservation Date Field -->
<div class="col-sm-12">
    {!! Form::label('reservation_date', 'Reservation Date:') !!}
    <p>{{ $reservation->reservation_date }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $reservation->status }}</p>
</div>

