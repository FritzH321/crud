@extends('app')

@section('main-content')
<div class="container">
	 @include('clients.show_fields')
    {!! $client->count !!}
</div>
@endsection
