<!-- Author Id Field -->
<div class="col-sm-12">
    {!! Form::label('author_id', 'Author Id:') !!}
    <p>{{ $resource->author_id }}</p>
</div>

<!-- Category Id Field -->
<div class="col-sm-12">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $resource->category_id }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $resource->title }}</p>
</div>

<!-- Type Field -->
<div class="col-sm-12">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $resource->type }}</p>
</div>

<!-- Access Type Field -->
<div class="col-sm-12">
    {!! Form::label('access_type', 'Access Type:') !!}
    <p>{{ $resource->access_type }}</p>
</div>

<!-- File Url Field -->
<div class="col-sm-12">
    {!! Form::label('file_url', 'File Url:') !!}
    <p>{{ $resource->file_url }}</p>
</div>

