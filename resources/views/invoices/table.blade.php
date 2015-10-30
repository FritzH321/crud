<table class="table">
    <thead>
    <th>Client Id</th>
			<th>Invoicenumber</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($invoices as $invoice)
        <tr>
            <td>{!! $invoice->client_id !!}</td>
			<td>{!! $invoice->invoicenumber !!}</td>
            <td>
                <a href="{!! route('invoices.edit', [$invoice->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('invoices.delete', [$invoice->id]) !!}" onclick="return confirm('Are you sure wants to delete this Invoice?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
