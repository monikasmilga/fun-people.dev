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

/**
 * CITY FORM
 */
Route::post('/formcity', ['as' => 'app.city.create', 'uses' => 'FunCityController@create']);

Route::get('/formcity', function () {
    return view('formcity');
});

/**
 * HOBBIES FORM
 */
Route::post('/formhobbies', ['as' => 'app.hobbies.create', 'uses' => 'FunHobbiesController@create']);

Route::get('/formhobbies', function () {
    return view('formhobbies');
});

/**
 * PEOPLE FORM
 */
Route::post('/formpeople', ['as' => 'app.people.create', 'uses' => 'FunPeopleController@create']);

Route::get('/formpeople', ['uses' => 'FunPeopleController@showCreate']);

/*Route::get('/formpeople', function () {
    return view('formpeople');
});*/