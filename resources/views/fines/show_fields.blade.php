<!-- Member Id Field -->
<div class="col-sm-12">
    {!! Form::label('member_id', 'Member Id:') !!}
    <p>{{ $fine->member_id }}</p>
</div>

<!-- Borrowing Id Field -->
<div class="col-sm-12">
    {!! Form::label('borrowing_id', 'Borrowing Id:') !!}
    <p>{{ $fine->borrowing_id }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $fine->amount }}</p>
</div>

<!-- Reason Field -->
<div class="col-sm-12">
    {!! Form::label('reason', 'Reason:') !!}
    <p>{{ $fine->reason }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $fine->status }}</p>
</div>

