<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* Route::middleware('api')->group(function () {
    Route::resource('clients', ClientController::class);  // will be axios get /api/clients
}); */

// Route::resource('clients', App\Http\Controllers\ClientController::class)->only(['submitData','getclientlist','getsingleclient']);


/* Route::prefix('api')->group(function () {
    Route::get('allclient', 'ClientController@getclientlist');  // will be axios get /api/allclient
    Route::post('/createclient', 'ClientController@submitData');
}); */

Route::post('/create', 'ClientController@submitData');  // create new client
Route::get('/clients/{id}', 'ClientController@getsingleclient');    // get single client
Route::get('/clients', 'ClientController@getclientlist');  // get list of clients