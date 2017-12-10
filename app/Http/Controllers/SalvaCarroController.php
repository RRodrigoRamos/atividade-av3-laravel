<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalvaCarroController extends Controller
{
    public function Recupera(Request $request)
    {
        //Recupera o userName do input
        $nomeCarro = $request->input('nome-carro');
        $nomeProprietario = $request->input('proprietario');
        $numPlaca = $request->input('m-placa');
        $marcaCarro = $request->input('marca');
        $corCarro = $request->input('cor');
        $anoFrabricacao = $request->input('fabricacao');

        dd($request);
        
    }
}
