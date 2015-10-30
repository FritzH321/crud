@extends('app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'invoices.store']) !!}

        @include('invoices.fields')

    {!! Form::close() !!}
</div>
@endsection
