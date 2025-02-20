<!-- Member Id Field -->
<div class="col-sm-12">
    {!! Form::label('member_id', 'Member Id:') !!}
    <p>{{ $record->member_id }}</p>
</div>

<!-- Book Copy Id Field -->
<div class="col-sm-12">
    {!! Form::label('book_copy_id', 'Book Copy Id:') !!}
    <p>{{ $record->book_copy_id }}</p>
</div>

<!-- Transaction Type Field -->
<div class="col-sm-12">
    {!! Form::label('transaction_type', 'Transaction Type:') !!}
    <p>{{ $record->transaction_type }}</p>
</div>

<!-- Issued By Field -->
<div class="col-sm-12">
    {!! Form::label('issued_by', 'Issued By:') !!}
    <p>{{ $record->issued_by }}</p>
</div>

<!-- Issued At Field -->
<div class="col-sm-12">
    {!! Form::label('issued_at', 'Issued At:') !!}
    <p>{{ $record->issued_at }}</p>
</div>

<!-- Due Date Field -->
<div class="col-sm-12">
    {!! Form::label('due_date', 'Due Date:') !!}
    <p>{{ $record->due_date }}</p>
</div>

<!-- Returned At Field -->
<div class="col-sm-12">
    {!! Form::label('returned_at', 'Returned At:') !!}
    <p>{{ $record->returned_at }}</p>
</div>

<!-- Fine Amount Field -->
<div class="col-sm-12">
    {!! Form::label('fine_amount', 'Fine Amount:') !!}
    <p>{{ $record->fine_amount }}</p>
</div>

<!-- Fine Status Field -->
<div class="col-sm-12">
    {!! Form::label('fine_status', 'Fine Status:') !!}
    <p>{{ $record->fine_status }}</p>
</div>

