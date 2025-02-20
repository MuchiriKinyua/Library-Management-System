<!-- Full Name Field -->
<div class="col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $author->full_name }}</p>
</div>

<!-- Bio Field -->
<div class="col-sm-12">
    {!! Form::label('bio', 'Bio:') !!}
    <p>{{ $author->bio }}</p>
</div>

<!-- Date Of Birth Field -->
<div class="col-sm-12">
    {!! Form::label('date_of_birth', 'Date Of Birth:') !!}
    <p>{{ $author->date_of_birth }}</p>
</div>

<!-- Nationality Field -->
<div class="col-sm-12">
    {!! Form::label('nationality', 'Nationality:') !!}
    <p>{{ $author->nationality }}</p>
</div>

