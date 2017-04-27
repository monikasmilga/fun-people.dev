<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generate-fake-data/city/{count}', ['uses'=>'FunCityController@generateCity']);

//Route::get('/city', ['uses' => '']);

Route::post('/form', ['as' => 'app.city.create', 'uses' => 'FunCityController@create']);

Route::get('/form', function () {
    return view('form');
});

