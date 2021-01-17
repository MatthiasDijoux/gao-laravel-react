<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/clients/search', 'ClientsController@findUsers');



Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout')->middleware('auth:api');

Route::prefix('ordinateur')->group(function () {
    Route::post('/delete/{id}', 'OrdinateursController@deleteOrdinateur');
    Route::post('/add', 'OrdinateursController@addOrdinateur');
    Route::post('/get', 'OrdinateursController@getOrdinateurs');
});
Route::prefix('attributions')->group(function () {
    Route::post('/add', 'OrdinateursController@addAttribution');
    Route::get('/get/{id}', 'OrdinateursController@getAttributions')->where('id', '[0-9]+');
    Route::post('/delete/{id}', 'OrdinateursController@deleteAttribution');

});
