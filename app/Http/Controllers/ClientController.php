<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Libraries\Repositories\ClientRepository;
use App\Models\Client;


use DebugBar\DebugBar;
use Flash;
use Auth;
use Grimthorr\LaravelUserSettings\Setting;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class ClientController extends AppBaseController
{

	/** @var  ClientRepository */
	private $clientRepository;

	function __construct(ClientRepository $clientRepo)
	{
        $this->middleware('auth');
		$this->clientRepository = $clientRepo;
	}

	/**
	 * Display a listing of the Client.
	 *
	 * @return Response
	 */
	public function index()
	{

        $clients = Auth::user()->clients()->paginate(10);



		return view('clients.index')
			->with('clients', $clients);
	}

	/**
	 * Show the form for creating a new Client.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('clients.create');
	}

	/**
	 * Store a newly created Client in storage.
	 *
	 * @param CreateClientRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateClientRequest $request)
	{
        $client = new Client($request->all());

        Auth::user()->clients()->save($client);


		Flash::success('Client saved successfully.');

		return redirect(route('clients.index'));
	}

	/**
	 * Display the specified Client.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{

		$client = $this->clientRepository->find($id);


        array_add($client,"count",$client->invoices()->count());

		if(empty($client) || Auth::id() != $client->user_id)
		{
			Flash::error('Client not found');

			return redirect(route('clients.index'));
		}

        setting()->set('example', 'hello world');

// Save to database
        setting()->save();


		return view('clients.show')->with('client', $client);
	}

	/**
	 * Show the form for editing the specified Client.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$client = $this->clientRepository->find($id);

		if(empty($client))
		{
			Flash::error('Client not found');

			return redirect(route('clients.index'));
		}

		return view('clients.edit')->with('client', $client);
	}

	/**
	 * Update the specified Client in storage.
	 *
	 * @param  int              $id
	 * @param UpdateClientRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateClientRequest $request)
	{
		$client = $this->clientRepository->find($id);

		if(empty($client))
		{
			Flash::error('Client not found');

			return redirect(route('clients.index'));
		}

		$client = $this->clientRepository->updateRich($request->all(), $id);

		Flash::success('Client updated successfully.');

		return redirect(route('clients.index'));
	}

	/**
	 * Remove the specified Client from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$client = $this->clientRepository->find($id);

		if(empty($client))
		{
			Flash::error('Client not found');

			return redirect(route('clients.index'));
		}

		$this->clientRepository->delete($id);

		Flash::success('Client deleted successfully.');

		return redirect(route('clients.index'));
	}
}
