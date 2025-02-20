<!-- Book Id Field -->
<div class="col-sm-12">
    {!! Form::label('book_id', 'Book Id:') !!}
    <p>{{ $copy->book_id }}</p>
</div>

<!-- Shelf Location Field -->
<div class="col-sm-12">
    {!! Form::label('shelf_location', 'Shelf Location:') !!}
    <p>{{ $copy->shelf_location }}</p>
</div>

<!-- Barcode Field -->
<div class="col-sm-12">
    {!! Form::label('barcode', 'Barcode:') !!}
    <p>{{ $copy->barcode }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $copy->status }}</p>
</div>

<!-- Book Condition Field -->
<div class="col-sm-12">
    {!! Form::label('book_condition', 'Book Condition:') !!}
    <p>{{ $copy->book_condition }}</p>
</div>

<!-- Added By Field -->
<div class="col-sm-12">
    {!! Form::label('added_by', 'Added By:') !!}
    <p>{{ $copy->added_by }}</p>
</div>

