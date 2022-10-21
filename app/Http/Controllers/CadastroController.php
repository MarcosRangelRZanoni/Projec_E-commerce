<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    //Responsavel por exibir a página de cadastro do site 

    public function index()
    {
        return view('site.cadastroUser');
    }
}
