<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index () {

        $users = Usuario::all();


        return view ('users.index', [
        'users' => $users
        ]);
    }

    public function create()
    {
        return view ('users.create');
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->email = $request->email;
        $usuario->nome = $request->nome;
        $usuario->usuario = $request->usuario;
        $usuario->senha = $request->senha;
        $usuario->senhac = $request->senhac;
        var_dump($usuario->save());
    }
}
