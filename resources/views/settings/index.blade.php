@extends('app')

@section('htmlheader_title')
    Factuur Simpel
@endsection


@section('contentheader_title')
    Factuur Simpel
@endsection

@section('contentheader_description')
   Instellingen
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            @include('flash::message')
        </div>
    </div>



    <div class="row">
        <div class="col-md-3">
            <div class="box box-solid">

                <div class="box-body no-padding" style="display: block;">
                    <ul class="nav nav-pills nav-stacked" id="settingsmenu">
                        <li  class="{{ Request::is( 'settings/factuur') ? 'active' : '' }}"><a href="{{ url('settings/factuur') }}"><i class="fa fa-cog"></i> Factuur </a></li>
                        <li><a href="#"><i class="fa fa-building-o"></i> Bedrijf</a></li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i> Email</a></li>
                        <li  class="{{ Request::is( 'settings/account') ? 'active' : '' }}"><a href="{{ url('settings/account') }}"><i class="fa fa-user-secret"></i> Account</a></li>

                    </ul>
                </div><!-- /.box-body -->
            </div>
        </div>
        <div class="col-md-9" id="#pjax-container2">
           @yield('settings-content')
        </div><!-- /.col -->
    </div>


@endsection