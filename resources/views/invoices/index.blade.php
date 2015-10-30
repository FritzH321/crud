@extends('app')

@section('contentheader_title')
    Invoices
@endsection

@section('main-content')

    <div class="container">

        @include('flash::message')

        <div class="row">

            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('invoices.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($invoices->isEmpty())
                <div class="well text-center">No Invoices found.</div>
            @else
                @include('invoices.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $invoices])


    </div>
@endsection