<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function ()
{
	Route::group(['prefix' => 'v1'], function ()
	{
        require Config::get('generator.path_api_routes');
	});
});


Route::get('settings/account', [
    'as' => 'settings.account', 'uses' => 'SettingsController@account'
]);
Route::get('settings/factuur', [
    'as' => 'settings.factuur', 'uses' => 'SettingsController@factuur'
]);

Route::resource('settings', 'SettingsController');





Route::resource('klanten', 'ClientController');





Route::get('klant/{id}/delete', [
    'as' => 'clients.delete',
    'uses' => 'ClientController@destroy',
]);



Route::resource('clients', 'ClientController');

Route::get('clients/{id}/delete', [
    'as' => 'clients.delete',
    'uses' => 'ClientController@destroy',
]);


Route::resource('invoices', 'InvoiceController');

Route::get('invoices/{id}/delete', [
    'as' => 'invoices.delete',
    'uses' => 'InvoiceController@destroy',
]);


Route::group(['middleware' => 'auth'], function () {
    Route::get('{view}', function ($view) {
        try {
            return view($view);
        } catch (\Exception $e) {
            abort(404);
        }
    })->where('view', '.*');
});
