<?php

namespace App\Http\Controllers;

use App\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('carros.lista');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cadastraCarros(Request $requisicao)
    {
      Carro::create([
        'numbcarro' => $requisicao->get('numbcarro'),
        'marca' => $requisicao->get('marca'),
        'nomecarro' => $requisicao->get('nomecarro'),
        'proprietario' => $requisicao->get('proprietario'),
        'nplaca' => $requisicao->get('nplaca'),
        'cor' => $requisicao->get('cor'),
        'fabricacao' => $requisicao->get('fabricacao'),
      ]);
      return redirect('lista-carros');
    }

    public function listaCarros()
    {
      $carros = Carro::select('*');
      $carros->orderBy('modelo', 'asc');

      $listaCarros = $carros->get();

      return view('carros.lista', [
        'carros' => $listaCarros
      ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function show(Carro $carro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function edit(Carro $carro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carro $carro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carro $carro)
    {
        //
    }
}