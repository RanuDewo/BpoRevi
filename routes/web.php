<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('master_data' , 'MasterDataController@index');
    Route::post('master_data' , 'MasterDataController@store');
    Route::get('master_data/hapus/{id}' , 'MasterDataController@destroy');
    Route::get('master_data/edit/{id}' , 'MasterDataController@edit');
    Route::post('master_data/update' , 'MasterDataController@update');
    Route::get('log-out', 'HomeController@logout');
    Route::get('upload_data_spg' , 'MasterTadController@index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
