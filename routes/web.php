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
    Route::get('master_area/update', 'MasterAreaCotroller@update');

    Route::resource('master_cabang', 'MasterCabangController');
    Route::get('master_cabang/hapus/{id}', 'MasterCabangController@destroy');

    Route::get('log-out', 'HomeController@logout');

    Route::get('upload_data_spg' , 'MasterTadController@index');
    Route::post('upload_data_spg', 'MasterTadController@store');

    Route::get('maping_area', 'MapingAreaController@index');
    Route::post('maping_area', 'MapingAreaController@store');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
