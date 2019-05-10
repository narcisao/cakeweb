@extends('layout')
@section('cabecalho')
    Listagem de usuários
@endsection
<!-- barra de navegacao superior -->

<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
        <form class="form-inline my-2 my-lg-0">
            <span class="navbar-text text-white mr-md-2">
                Nome
            </span>
            <input class="form-control mr-sm-3" type="search" aria-label="Search">

            <span class="navbar-text text-white mr-md-2">
                E-mail
            </span>
            <input class="form-control mr-sm-3" type="search" aria-label="Search">

            <button class="btn btn-info my-2 my-sm-0" type="submit">Filtrar</button>
        </form>
    </div>
</nav>

<br>


<!-- IF para verificacao e alerta de sucesso -->
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
                <td class="align-middle" scope="row">{{ $user->nome }}</td>
                <td class="align-middle">{{ $user->usuario }}</td>
                <td class="align-middle">{{ $user->email }}</td>
                @csrf
                <td><a href="/edit/{{ $user->id }}" class="btn btn-light btn-sm"><i class="fas fa-pencil-alt"></i></i> Editar</a>
                    <a href="/remove/{{ $user->id }}" class="btn btn-danger btn-sm" ><i class="fas fa-times"></i> Deletar</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>

    <ul class="pagination justify-content-center">
        <a href="/create" class="btn btn-primary mb-2 mt-1">Cadastrar</a>
    </ul>

    <ul class="pagination justify-content-center">
        {{ $users->links() }}
    </ul>

</div>
</body>
</html>


