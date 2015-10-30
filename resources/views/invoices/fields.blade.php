<!-- Client Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('client_id', 'Client Id:') !!}
	{!! Form::number('client_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoicenumber Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('invoicenumber', 'Invoicenumber:') !!}
	{!! Form::number('invoicenumber', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
