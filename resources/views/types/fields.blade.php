<!-- Full Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('full_name', 'Full Name:') !!}
    {!! Form::text('full_name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Borrow Limit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('borrow_limit', 'Borrow Limit:') !!}
    {!! Form::text('borrow_limit', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Duration In Days Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duration_in_days', 'Duration In Days:') !!}
    {!! Form::text('duration_in_days', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Fee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fee', 'Fee:') !!}
    {!! Form::text('fee', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>