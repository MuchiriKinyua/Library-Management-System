<!-- Member Id Field -->
<div class="col-sm-12">
    {!! Form::label('member_id', 'Member Id:') !!}
    <p>{{ $borrowing->member_id }}</p>
</div>

<!-- Book Copy Id Field -->
<div class="col-sm-12">
    {!! Form::label('book_copy_id', 'Book Copy Id:') !!}
    <p>{{ $borrowing->book_copy_id }}</p>
</div>

<!-- Issued By Field -->
<div class="col-sm-12">
    {!! Form::label('issued_by', 'Issued By:') !!}
    <p>{{ $borrowing->issued_by }}</p>
</div>

<!-- Issue Date Field -->
<div class="col-sm-12">
    {!! Form::label('issue_date', 'Issue Date:') !!}
    <p>{{ $borrowing->issue_date }}</p>
</div>

<!-- Due Date Field -->
<div class="col-sm-12">
    {!! Form::label('due_date', 'Due Date:') !!}
    <p>{{ $borrowing->due_date }}</p>
</div>

<!-- Return Date Field -->
<div class="col-sm-12">
    {!! Form::label('return_date', 'Return Date:') !!}
    <p>{{ $borrowing->return_date }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $borrowing->status }}</p>
</div>

