<?php

namespace App\Http\Controllers;

use App\Carro;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

     public function formCadastro()
     {
       return view('carros.cadastro');
     }

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
      return redirect('listar-carros');
    }


    public function listaCarros(Request $requisicao)
    {
      $carros = Carro::select('*');

      if($requisicao->has('pesquisa')) {
        $carros->where('nomecarro', 'like', '%' . $requisicao->get('pesquisa') . '%');
        $carros->Orwhere('nplaca', 'like', '%' . $requisicao->get('pesquisa') . '%');
      }

      $carros->orderBy('nomecarro', 'asc');
      $listaCarros = $carros->get();

      return view('carros.lista', [
        'carros' => $listaCarros,
      ]);
    }

    public function editaCarro($id)
    {
      $carros = Carro::find($id);

      return view('carros.editar',[
        'carros' => $carros,
      ]);
    }

    public function alteraCarro($id, Request $requisicao)
    {
      $carros = Carro::find($id);
      $carros->update([
        'numbcarro' => $requisicao->get('numbcarro'),
        'marca' => $requisicao->get('marca'),
        'nomecarro' => $requisicao->get('nomecarro'),
        'proprietario' => $requisicao->get('proprietario'),
        'nplaca' => $requisicao->get('nplaca'),
        'cor' => $requisicao->get('cor'),
        'fabricacao' => $requisicao->get('fabricacao')
      ]);

      return redirect('listar-carros');
    }


    public function detalhe($id)
    {
      $carros = Carro::find($id);

      return view('carros.detalhe',[
        'carros' => $carros,
      ]);
    }


    public function excluirCarro($id)
    {
      Carro::destroy($id);

      return redirect('listar-carros');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $requisicao)
    {
        $this->validate($requisicao,[
          'nplaca' => 'required|max:8',
          ] , [
          'nplaca.required' => 'No máximo até 8 numeros',

          // mensagem personalizada de erros
        ]);
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

}
