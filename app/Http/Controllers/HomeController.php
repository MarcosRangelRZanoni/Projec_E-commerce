<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Responsavel por exibir a página inical do site 

    public function index()
    {
        return view('site.home');
    }
}
