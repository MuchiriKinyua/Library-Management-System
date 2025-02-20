<!-- Full Name Field -->
<div class="col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $type->full_name }}</p>
</div>

<!-- Borrow Limit Field -->
<div class="col-sm-12">
    {!! Form::label('borrow_limit', 'Borrow Limit:') !!}
    <p>{{ $type->borrow_limit }}</p>
</div>

<!-- Duration In Days Field -->
<div class="col-sm-12">
    {!! Form::label('duration_in_days', 'Duration In Days:') !!}
    <p>{{ $type->duration_in_days }}</p>
</div>

<!-- Fee Field -->
<div class="col-sm-12">
    {!! Form::label('fee', 'Fee:') !!}
    <p>{{ $type->fee }}</p>
</div>

