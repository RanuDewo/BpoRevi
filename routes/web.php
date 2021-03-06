<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('master_data', 'MasterDataController@index');
    Route::get('master_data/create', 'MasterDataController@create');
    Route::post('master_data', 'MasterDataController@store');
    Route::get('master_data/hapus/{id}', 'MasterDataController@destroy');
    Route::get('master_data/edit/{id}', 'MasterDataController@edit');
    Route::post('master_data/update', 'MasterDataController@update');

    Route::get('master_area', 'MasterAreaCotroller@index');
    Route::post('master_area', 'MasterAreaCotroller@store');
    Route::get('master_area/hapus/{id}', 'MasterAreaCotroller@destroy');
    Route::get('master_area/edit/{id}', 'MasterAreaCotroller@edit');
    Route::post('master_area/update', 'MasterAreaCotroller@update');

    Route::resource('master_cabang', 'MasterCabangController');
    Route::get('master_cabang/hapus/{id}', 'MasterCabangController@destroy');
    Route::get('master_cabang/edit/{id}', 'MasterCabangController@edit');
    Route::post('master_cabang/update', 'MasterCabangController@update');

    Route::get('log-out', 'HomeController@logout');

    Route::get('upload_data_spg' , 'MasterTadController@index');
    Route::post('upload_data_spg', 'MasterTadController@store');
    Route::post('upload_data_spg/excel', 'MasterTadController@storeExcel');
    Route::get('upload_data_spg' , 'MasterTadController@index');
    Route::get('upload_data_spg/edit/{id}', 'MasterTadController@edit');
    Route::post('upload_data_spg/update', 'MasterTadController@update');
    Route::get('upload_data_spg/hapus/{id}', 'MasterTadController@destroy');

    Route::get('maping_area', 'MapingAreaController@index');
    Route::post('maping_area', 'MapingAreaController@store');
    Route::get('role_user', 'MasterTadController@roleUser');

    Route::get('master_client', 'MasterClientController@index');
    Route::post('master_client', 'MasterClientController@store');
    Route::get('master_client/hapus/{id}', 'MasterClientController@destroy');
    Route::get('master_client/edit/{id}', 'MasterClientController@edit');
    Route::post('master_client/update', 'MasterClientController@update');

    Route::get('input_prospek' , 'TransaksiController@index');
    Route::post('input_prospek' , 'TransaksiController@store');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
