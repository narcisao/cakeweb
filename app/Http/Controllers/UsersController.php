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

    public function edit($id)
    {
        $user = Usuario::find($id);
        return view ('users.edit', compact('user'));
    }

    public function delete ($id)
    {
        $user = Usuario::find($id);
        return view ('users.delete', compact('user'));
    }

    public function store(Request $request)
    {

        $usuario = Usuario::create($request->all());
        $request->session()->flash('mensagem', "Usuário {$usuario->nome} criado com sucesso");

        return redirect('/');
    }

    public function att(Request $request)
    {
        echo $request->id;
    }

    public function destroy(Request $request)
    {
        Usuario::destroy($request->id);

        $request->session()->flash('mensagem', "Usuário removido com sucesso");

        return redirect('/');
    }
}
