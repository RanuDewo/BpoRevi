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

Route::get('getdata/{id}', 'MasterApiController@getdata');

Route::post('getdata', 'MasterApiController@getdata');

Route::post('login', 'MasterApiController@login');

Route::post('saveProspek', 'MasterApiController@saveProspek');

Route::get('getMasterData', 'MasterApiController@getMasterData');

Route::post('getdataDetail', 'MasterApiController@getdataDetail');

Route::post('updateProspek', 'MasterApiController@updateProspek');
Route::get('getCatTrans', 'MasterApiController@getTrans');
Route::get('getCatSc', 'MasterApiController@getSc');

Route::post('benefit', 'MasterApiController@benefit');

Route::post('listBenefit', 'MasterApiController@listBenefit');
