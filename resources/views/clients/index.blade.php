@extends('app')

@section('htmlheader_title')
    Clients
@endsection


@section('contentheader_title')
    Clients
@endsection

@section('contentheader_description')
    Welcome Administrator
@endsection

@section('main-content')


        <div class="row">
            <div class="col-md-12">
                @include('flash::message')
            </div>
        </div>



        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#clients" data-toggle="tab"><i class="fa fa-users"></i> Clients</a></li>
                        <li><a href="#newclient" data-toggle="tab"><i class="fa fa-user-plus"></i> New Client</a></li>



                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="clients">



                                @if($clients->isEmpty())
                                    <div class="well text-center">No Clients found.</div>
                                @else
                                    @include('clients.table')
                                @endif


                            @include('common.paginate', ['records' => $clients])


                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="newclient">

                            @include('common.errors')

                            {!! Form::open(['route' => 'clients.store']) !!}

                            @include('clients.fields')

                            {!! Form::close() !!}
                           <div class="clearfix"></div>
                        </div><!-- /.tab-pane -->

                    </div><!-- /.tab-content -->
                </div><!-- nav-tabs-custom -->
            </div><!-- /.col -->
        </div>








@endsection

@section('inline-scripts')
    <script id="inline-scripts">
        $(document).ready(function(){
console.log( $.fn.dataTable.isDataTable( '#clientstable' ) );
            if (! $.fn.dataTable.isDataTable( '#clientstable' ) ) {

                //$('.dataTables_info').closest('.row').remove();
                //$('.dataTables_length').closest('.row').remove();

                $('#clientstable').DataTable({
                    responsive: true
                });

            }else {
                console.log('bestaat al');
            }




        });




    </script>

@endsection