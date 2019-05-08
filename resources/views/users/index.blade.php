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
                <li class="list-group-item ">{{ $user->nome }}</li>
                <li class="list-group-item">{{ $user->email }}</li>
            @endforeach
        </ul>

        <a href="/create" class="btn btn-primary mb-2 mt-1">Cadastrar</a>

    </div>
</body>
</html> 
