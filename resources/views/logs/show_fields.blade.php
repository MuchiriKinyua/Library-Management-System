<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $log->user_id }}</p>
</div>

<!-- Action Field -->
<div class="col-sm-12">
    {!! Form::label('action', 'Action:') !!}
    <p>{{ $log->action }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $log->description }}</p>
</div>

