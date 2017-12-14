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
Route::get('/listar-carros', 'CarroController@listaCarros');
Route::get('/form-cadastro', 'CarroController@formCadastro');
Route::get('/detalhar-carro/{id}', 'CarroController@detalhe');

Route::post('/cadastrar-carro', 'CarroController@cadastraCarros');
Route::put('/alterar-carro/{id}', 'CarroController@alteraCarro');
Route::get('/editar-carro/{id}', 'CarroController@editaCarro');
Route::delete('excluir-carro/{id}', 'CarroController@excluirCarro');
