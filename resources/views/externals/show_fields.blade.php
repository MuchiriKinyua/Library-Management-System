<!-- Full Name Field -->
<div class="col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $external->full_name }}</p>
</div>

<!-- Api Url Field -->
<div class="col-sm-12">
    {!! Form::label('api_url', 'Api Url:') !!}
    <p>{{ $external->api_url }}</p>
</div>

<!-- Api Key Field -->
<div class="col-sm-12">
    {!! Form::label('api_key', 'Api Key:') !!}
    <p>{{ $external->api_key }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $external->status }}</p>
</div>

