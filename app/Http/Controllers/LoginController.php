<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Responsavel por exibir a página de login do site 

    public function index()
    {
        return view('site.login');
    }
}
