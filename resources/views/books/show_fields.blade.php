<!-- Category Id Field -->
<div class="col-sm-12">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $book->category_id }}</p>
</div>

<!-- Author Id Field -->
<div class="col-sm-12">
    {!! Form::label('author_id', 'Author Id:') !!}
    <p>{{ $book->author_id }}</p>
</div>

<!-- Publisher Id Field -->
<div class="col-sm-12">
    {!! Form::label('publisher_id', 'Publisher Id:') !!}
    <p>{{ $book->publisher_id }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $book->title }}</p>
</div>

<!-- Language Field -->
<div class="col-sm-12">
    {!! Form::label('language', 'Language:') !!}
    <p>{{ $book->language }}</p>
</div>

<!-- Publication Year Field -->
<div class="col-sm-12">
    {!! Form::label('publication_year', 'Publication Year:') !!}
    <p>{{ $book->publication_year }}</p>
</div>

<!-- Edition Field -->
<div class="col-sm-12">
    {!! Form::label('edition', 'Edition:') !!}
    <p>{{ $book->edition }}</p>
</div>

<!-- Cover Image Field -->
<div class="col-sm-12">
    {!! Form::label('cover_image', 'Cover Image:') !!}
    <p>{{ $book->cover_image }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $book->status }}</p>
</div>

