<table id="clientstable" class="table responsive table-hover" width="100%">
    <thead>
    <th>Client</th>
			<th>Invoices</th>

		<th>Total</th>


    <th  >Action</th>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td><a  href="{!! route('clients.show', [$client->id]) !!}">{!! $client->clientname !!}</a><br><small>{!! $client->clientemail !!}</small></td>
			<td> <i>{!! $client->invoices()->count() !!} invoices</i><br /><small>0 unpaid</small></td>


<td><i>50,00 EURO</i><br/><small>Total invoiced</small></td>
            <td class="text-right">
                <a class="btn bg-navy btn-flat btn-sm" href="{!! route('clients.edit', [$client->id]) !!}"><i class="fa fa-eye"></i> Overzicht</a>
                <a class="btn btn-primary btn-flat btn-sm" href="{!! route('clients.edit', [$client->id]) !!}"><i class="fa fa-pencil-square-o"></i> Bewerk</a>
                <a class="btn btn-success btn-flat btn-sm" href="{!! route('clients.edit', [$client->id]) !!}"><i class="fa fa-file-text"></i> New Invoice</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="hidden">
    {!! $client->clientcontact !!}
</div>