<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Membership Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('membership_type_id', 'Membership Type Id:') !!}
    {!! Form::number('membership_type_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Membership Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('membership_number', 'Membership Number:') !!}
    {!! Form::number('membership_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Expiry Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expiry_date', 'Expiry Date:') !!}
    {!! Form::text('expiry_date', null, ['class' => 'form-control','id'=>'expiry_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#expiry_date').datepicker()
    </script>
@endpush

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>