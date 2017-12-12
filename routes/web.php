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

Route::get('/cadastro-carro', function () {
   return view('carros.cadastro');
});

Route::post('/cadastrar-carro', 'CarroController@cadastraCarros');
Route::put('/alterar-carro', 'CarroController@alteraCarro');
Route::delete('excluir-carro/{id}', 'CarroController@excluirCarro');
Route::get('/detalhar-carro', 'CarroController@detalhe');
