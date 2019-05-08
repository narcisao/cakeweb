<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index (Request $request) {

        $users = Usuario::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');

        return view ('users.index', compact('users', 'mensagem'));
    }

    public function create()
    {
        return view ('users.create');
    }

    public function store(Request $request)
    {

        $usuario = Usuario::create($request->all());
        $request->session()->flash('mensagem', "Usuário {$usuario->nome} criado com sucesso");

        return redirect('/');
    }

    public function edit(Request $request)
    {
        $post = Post::find($request->id);
        return view('users.edit')->with('post', $post);
    }

    public function destroy(Request $request)
    {
        echo $request->id;
    }
}
