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
//
// Route::get('/', function () {
//     return view('welcome');
// });


// Home dos Carros
Route::get('/', 'CarroController@index');

Route::get('/lista-carros', 'CarroController@index');
Route::post('/cadastrar-carro', 'CarroController@cadastraCarros');
Route::put('/alterar-carro/{id}', 'CadastraCarroController@Cadastra');
Route::delete('excluir-carro/{id}', 'CadastraCarroController@Cadastra');
Route::get('/recupera-dados', 'SalvaCarroController@Recupera');
