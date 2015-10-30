<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Libraries\Repositories\InvoiceRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class InvoiceController extends AppBaseController
{

	/** @var  InvoiceRepository */
	private $invoiceRepository;

	function __construct(InvoiceRepository $invoiceRepo)
	{
        $this->middleware('auth');
		$this->invoiceRepository = $invoiceRepo;

	}

	/**
	 * Display a listing of the Invoice.
	 *
	 * @return Response
	 */
	public function index()
	{
		$invoices = $this->invoiceRepository->paginate(10);

		return view('invoices.index')
			->with('invoices', $invoices);
	}

	/**
	 * Show the form for creating a new Invoice.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('invoices.create');
	}

	/**
	 * Store a newly created Invoice in storage.
	 *
	 * @param CreateInvoiceRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateInvoiceRequest $request)
	{
		$input = $request->all();

		$invoice = $this->invoiceRepository->create($input);

		Flash::success('Invoice saved successfully.');

		return redirect(route('invoices.index'));
	}

	/**
	 * Display the specified Invoice.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$invoice = $this->invoiceRepository->find($id);

		if(empty($invoice))
		{
			Flash::error('Invoice not found');

			return redirect(route('invoices.index'));
		}

		return view('invoices.show')->with('invoice', $invoice);
	}

	/**
	 * Show the form for editing the specified Invoice.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$invoice = $this->invoiceRepository->find($id);

		if(empty($invoice))
		{
			Flash::error('Invoice not found');

			return redirect(route('invoices.index'));
		}

		return view('invoices.edit')->with('invoice', $invoice);
	}

	/**
	 * Update the specified Invoice in storage.
	 *
	 * @param  int              $id
	 * @param UpdateInvoiceRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateInvoiceRequest $request)
	{
		$invoice = $this->invoiceRepository->find($id);

		if(empty($invoice))
		{
			Flash::error('Invoice not found');

			return redirect(route('invoices.index'));
		}

		$invoice = $this->invoiceRepository->updateRich($request->all(), $id);

		Flash::success('Invoice updated successfully.');

		return redirect(route('invoices.index'));
	}

	/**
	 * Remove the specified Invoice from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$invoice = $this->invoiceRepository->find($id);

		if(empty($invoice))
		{
			Flash::error('Invoice not found');

			return redirect(route('invoices.index'));
		}

		$this->invoiceRepository->delete($id);

		Flash::success('Invoice deleted successfully.');

		return redirect(route('invoices.index'));
	}
}
