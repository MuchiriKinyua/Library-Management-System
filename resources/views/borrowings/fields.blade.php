<!-- Member Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('member_id', 'Member Id:') !!}
    {!! Form::number('member_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Book Copy Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('book_copy_id', 'Book Copy Id:') !!}
    {!! Form::number('book_copy_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Issued By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('issued_by', 'Issued By:') !!}
    {!! Form::text('issued_by', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Issue Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('issue_date', 'Issue Date:') !!}
    {!! Form::text('issue_date', null, ['class' => 'form-control','id'=>'issue_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#issue_date').datepicker()
    </script>
@endpush

<!-- Due Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('due_date', 'Due Date:') !!}
    {!! Form::text('due_date', null, ['class' => 'form-control','id'=>'due_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#due_date').datepicker()
    </script>
@endpush

<!-- Return Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('return_date', 'Return Date:') !!}
    {!! Form::text('return_date', null, ['class' => 'form-control','id'=>'return_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#return_date').datepicker()
    </script>
@endpush

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>