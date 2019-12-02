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
Route::get('/dicas', function () {
    return view('dicas');

});
    
Route::get('/mostrar/artigos','artigoController@list');
    
Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    
    Route::get('/cadastrar/artigo','artigoController@index');
    


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/eventos/create', 'eventosController@create');
Route::post('/eventos','eventosController@store');
Route::get('/eventos/{id}/edit', 'eventosController@edit');
Route::put('/eventos/{id}', 'eventosController@update');
Route::get('/eventos/{id}/delete', 'eventosController@delete');
Route::delete('/eventos/{id}', 'eventosController@destroy');



Route::get('/artigo/create', 'esportesController@create');
Route::post('/artigo','artigoController@store');
Route::get('/artigo/{id}/edit', 'esportesController@edit');
Route::put('/artigo/{id}', 'esportesController@update');
Route::get('/artigo/{id}/delete', 'esportesController@delete');
Route::delete('/artigo/{id}', 'esportesController@destroy');



Route::get('/atletas/create', 'atletasController@create');
Route::post('/atletas','atletasController@store');
Route::get('/atletas/{id}/edit', 'atletasController@edit');
Route::put('/atletas/{id}', 'atletasController@update');
Route::get('/atletas/{id}/delete', 'atletasController@delete');
Route::delete('/atletas/{id}', 'atletasController@destroy');


});

Route::get('/artigo', 'esportesController@index');
Route::get('/artigo/{id}', 'esportesController@show');


Route::get('/atletas', 'atletasController@index');
Route::get('/atletas/{id}', 'atletasController@show');
