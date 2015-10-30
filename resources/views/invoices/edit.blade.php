@extends('app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($invoice, ['route' => ['invoices.update', $invoice->id], 'method' => 'patch']) !!}

        @include('invoices.fields')

    {!! Form::close() !!}
</div>
@endsection
