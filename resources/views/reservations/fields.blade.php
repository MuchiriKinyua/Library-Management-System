<!-- Member Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('member_id', 'Member Id:') !!}
    {!! Form::number('member_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Book Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('book_id', 'Book Id:') !!}
    {!! Form::number('book_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Reservation Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reservation_date', 'Reservation Date:') !!}
    {!! Form::text('reservation_date', null, ['class' => 'form-control','id'=>'reservation_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#reservation_date').datepicker()
    </script>
@endpush

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>