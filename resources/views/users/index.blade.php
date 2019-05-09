@extends('layout')
@section('cabecalho')
    Listagem de usuários
@endsection

@if(!empty($mensagem))

    <div class="alert alert-success" role="alert">
        {{$mensagem}}
    </div>

@endif

<div class="container">
    <table class="table table-striped table-sm">
        <thead class="thead-light">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Usuário</th>
            <th scope="col">E-mail</th>
            <th scope="col">Opções</th>
        </tr>
        </thead>
        <tbody>

        @foreach($users as $user)

            <tr >
                <td class="align-middle" scope="row">{{ $user->nome }}</    td>
                <td class="align-middle">{{ $user->usuario }}</td>
                <td class="align-middle">{{ $user->email }}</td>
                @csrf
                <td><a href="/edit/{{ $user->id }}" class="btn btn-light btn-sm"><i class="fas fa-pencil-alt"></i></i> Editar</a>
                    <a href="/remove/{{ $user->id }}" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Deletar</a></td>
            </tr>

        @endforeach

        </tbody>
    </table>

    <a href="/create" class="btn btn-primary mb-2 mt-1">Cadastrar</a>
</div>

</body>
</html>


