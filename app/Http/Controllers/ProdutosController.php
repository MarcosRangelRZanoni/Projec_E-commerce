<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    //Responsavel por exibir a página de produtos do site 

    public function index()
    {
        $produtos = Produtos::orderBy("nome")->get();

        return view('site.produtos', compact('produtos'));
    }
}
