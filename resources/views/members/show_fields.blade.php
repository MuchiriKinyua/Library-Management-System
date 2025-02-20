<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $member->user_id }}</p>
</div>

<!-- Membership Type Id Field -->
<div class="col-sm-12">
    {!! Form::label('membership_type_id', 'Membership Type Id:') !!}
    <p>{{ $member->membership_type_id }}</p>
</div>

<!-- Membership Number Field -->
<div class="col-sm-12">
    {!! Form::label('membership_number', 'Membership Number:') !!}
    <p>{{ $member->membership_number }}</p>
</div>

<!-- Expiry Date Field -->
<div class="col-sm-12">
    {!! Form::label('expiry_date', 'Expiry Date:') !!}
    <p>{{ $member->expiry_date }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $member->status }}</p>
</div>

