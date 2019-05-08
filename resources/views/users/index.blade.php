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

        <ul class="list-group">
            @foreach($users as $user)
                <li class="list-group-item ">{{ $user->nome }}
                    @csrf

                    <a href="/edit/{{ $user->id }}" class="btn btn-light btn-sm"><i class="fas fa-pencil-alt"></i></i> Editar</a>
                    <a href="/remove/{{ $user->id }}" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Deletar</a>

                </li>

            @endforeach
        </ul>

        <a href="/create" class="btn btn-primary mb-2 mt-1">Cadastrar</a>


    </div>
</body>
</html> 
