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


Route::get('/', 'CarroController@listaCarros');
Route::get('/lista-carros', 'CarroController@listaCarros');
Route::post('/cadastra-carro', 'CarroController@cadastraCarros');
Route::put('/alterar-carro', 'CarroController@Cadastra');
Route::delete('excluir-carro/{id}', 'CarroController@excluirCarro');
Route::get('/detalhe-carro', 'CarroController@detalhe');
