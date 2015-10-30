@extends('settings/index')
@section('settings-content')
    <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Factuur</h3>

    </div><!-- /.box-header -->
    <div class="box-body">
        <div class="form-group">
            <label>Text</label>
            <input type="text" class="form-control" placeholder="Enter ...">
        </div>

        <hr/>

        <div class="form-group">
            <label>Text</label>
            <select class="form-control">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
            </select>
        </div>

    
        {!! Form::submit('Opslaan', ['class' => 'btn btn-primary']) !!}

    </div><!-- /.box-body -->

    </div><!-- /.box -->

    @endsection