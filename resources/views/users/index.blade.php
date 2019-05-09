@extends('layout')
@section('cabecalho')
    Listagem de usuários
@endsection

@if(!empty($mensagem))
<div class="alert alert-success">
    {{$mensagem}}
</div>
@endif

<div class="container">
<table class="table">
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

        <tr>
            <th scope="row">{{ $user->nome }}</th>
            <td>{{ $user->usuario }}</td>
            <td>{{ $user->email }}</td>
            @csrf
            <td><a href="/edit/{{ $user->id }}" class="btn btn-light btn-sm"><i class="fas fa-pencil-alt"></i></i> Editar</a>
                <a href="/remove/{{ $user->id }}" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Deletar</a></td>
        </tr>

    @endforeach

    </tbody>
</table>
</div>

</body>
</html> 
