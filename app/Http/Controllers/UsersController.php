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
        $email= $request->email;
        $nome = $request->nome;
        $usuario = $request->usuario;
        $senha = $request->senha;
        $senhac = $request->senhac;

        $etalele = Usuario::create($request->all());
        echo "Usuario com ID {$etalele->id} criado: {$etalele->nome}";
    }
}
