<!-- Staff Id Field -->
<div class="col-sm-12">
    {!! Form::label('staff_id', 'Staff Id:') !!}
    <p>{{ $schedule->staff_id }}</p>
</div>

<!-- Book Id Field -->
<div class="col-sm-12">
    {!! Form::label('book_id', 'Book Id:') !!}
    <p>{{ $schedule->book_id }}</p>
</div>

<!-- Member Id Field -->
<div class="col-sm-12">
    {!! Form::label('member_id', 'Member Id:') !!}
    <p>{{ $schedule->member_id }}</p>
</div>

<!-- Schedule Type Field -->
<div class="col-sm-12">
    {!! Form::label('schedule_type', 'Schedule Type:') !!}
    <p>{{ $schedule->schedule_type }}</p>
</div>

<!-- Start Time Field -->
<div class="col-sm-12">
    {!! Form::label('start_time', 'Start Time:') !!}
    <p>{{ $schedule->start_time }}</p>
</div>

<!-- End Time Field -->
<div class="col-sm-12">
    {!! Form::label('end_time', 'End Time:') !!}
    <p>{{ $schedule->end_time }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $schedule->status }}</p>
</div>

<!-- Notes Field -->
<div class="col-sm-12">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{{ $schedule->notes }}</p>
</div>

