<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index () {

        $users = Usuario::all();
        return view ('users.index', compact('users'));
    }

    public function create()
    {
        return view ('users.create');
    }

    public function store(Request $request)
    {
        
        $users = Usuario::all();

        $users->email= $request->email;
        $users->nome = $request->nome;
        $users->usuario = $request->usuario;
        $users->senha = $request->senha;
        $users->senhac = $request->senhac;

        var_dump($users);

        //var_dump(Usuario::create(['email' => $email]));
        //exit();

        /*
        $usuario = Usuario::create($request->all());
        echo "Usuario com ID {$usuario->id} criado: {$usuario->nome}";*/
    }
}
