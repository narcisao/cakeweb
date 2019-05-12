<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersFormRequest;
use App\Usuario;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index (Request $request) {

        //$users = Usuario::paginate(3);  -> versao para testes
        $users = Usuario::paginate(10); // -> versao final para entrega

        $mensagem = $request->session()->get('mensagem');

        return view ('users.index', compact('users', 'mensagem'));
    }

    public function find (int $id)
    {
        $mostra = Usuario::find($id);
        alert('$mostra');
    }

    public function create()
    {
        return view ('users.create');
    }

    public function edit(int $id)
    {
        $user = Usuario::find($id);
        return view ('users.edit', compact('user'));
    }

    public function delete (int $id)
    {
        $user = Usuario::find($id);
        return view ('users.delete', compact('user'));
    }

    public function store(UsersFormRequest $request)
    {

        $usuario = Usuario::create($request->all());
        $request->session()->flash('mensagem', "Usuário {$usuario->nome} criado com sucesso");

        return redirect('/');
    }

    public function update(UsersFormRequest $request, int $id)
    {
        $usuario = Usuario::find($id);

        $usuario->email = $request->get('email');
        $usuario->nome = $request->get('nome');
        $usuario->usuario = $request->get('usuario');
        $usuario->senha = $request->get('senha');

        $usuario->save();

        $request->session()->flash('mensagem', "Usuário {$usuario->nome} alterado com sucesso");

        return redirect('/');
    }

    public function destroy(Request $request)
    {
        Usuario::destroy($request->id);

        $request->session()->flash('mensagem', "Usuário removido com sucesso");

        return redirect('/');
    }
}
