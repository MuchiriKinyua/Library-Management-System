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

<!-- Transaction Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transaction_type', 'Transaction Type:') !!}
    {!! Form::text('transaction_type', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Issued By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('issued_by', 'Issued By:') !!}
    {!! Form::text('issued_by', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Issued At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('issued_at', 'Issued At:') !!}
    {!! Form::text('issued_at', null, ['class' => 'form-control','id'=>'issued_at']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#issued_at').datepicker()
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

<!-- Returned At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('returned_at', 'Returned At:') !!}
    {!! Form::text('returned_at', null, ['class' => 'form-control','id'=>'returned_at']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#returned_at').datepicker()
    </script>
@endpush

<!-- Fine Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fine_amount', 'Fine Amount:') !!}
    {!! Form::text('fine_amount', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Fine Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fine_status', 'Fine Status:') !!}
    {!! Form::text('fine_status', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>