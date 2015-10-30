@extends('app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($client, ['route' => ['clients.update', $client->id], 'method' => 'patch']) !!}

        @include('clients.fields')

    {!! Form::close() !!}
    <a class="btn  btn-danger btn-xs" href="{!! route('clients.delete', [$client->id]) !!}" onclick="return confirm('Are you sure wants to delete this Client?')"><i class="glyphicon glyphicon-remove"></i></a>
</div>
@endsection
