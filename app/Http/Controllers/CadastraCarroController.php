<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CadastraCarroController extends Controller
{
    public function Cadastra(){
        return view('criar');
    }
    
}
