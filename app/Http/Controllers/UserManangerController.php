<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserManangerController extends Controller
{
    public function index()
    {
        //Responsavel por exibir a página de usuarios do site 
        $users = User::latest()->paginate(5);

        return view('usuario.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
