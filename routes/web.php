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
use App\http\Controllers\EventController;

Route::get('/', 'EventController@index');
Route::get('/events/create', 'EventController@create');
//Receber parametro pelo id
Route::get('/events/{id}', 'EventController@show');

//Salvar o post
Route::post('/events', 'EventController@store');
Route::get('/contact', function () {
    return view('contato');
});


