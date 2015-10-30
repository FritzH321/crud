<!-- Clientname Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('clientname', 'Clientname:') !!}
	{!! Form::text('clientname', null, ['class' => 'form-control']) !!}
</div>

<!-- Clientcontact Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('clientcontact', 'Clientcontact:') !!}
	{!! Form::text('clientcontact', null, ['class' => 'form-control']) !!}
</div>

<!-- Clientemail Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('clientemail', 'Clientemail:') !!}
	{!! Form::email('clientemail', null, ['class' => 'form-control']) !!}
</div>

<!-- Clientvat Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('clientvat', 'Clientvat:') !!}
	{!! Form::text('clientvat', null, ['class' => 'form-control']) !!}
</div>

<!-- Clientaddress Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('clientaddress', 'Clientaddress:') !!}
	{!! Form::textarea('clientaddress', null, ['class' => 'form-control']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
