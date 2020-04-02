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
    return view('home');
})->name('home');

Route::get('responder/nombre', 'ResponderController@create')->name('responder.nombre');
Route::get('encuestadob/{busca}', 'EncuestadoController@show')->name('encuestado.show');
Route::get('encuestadoc/create', 'EncuestadoController@create')->name('encuestado.create');
Route::post('encuestadost/store', 'EncuestadoController@store')->name('encuestado.store');
Route::get('responderc/pregunta/{encuestado}', 'ResponderController@obtenPreg')->name('responder.create');
Route::post('rsponderp/store', 'ResponderController@store')->name('responder.store');
Route::post('rsponderpc/store', 'ResponderController@storecomenta')->name('respondercomenta.store');