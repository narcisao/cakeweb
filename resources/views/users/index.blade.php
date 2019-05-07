@extends('layout')
@section('cabecalho')
    Listagem de usuários
@endsection

    <div class="container">

        <ul class="list-group">
            @foreach($users as $user)
                <li class="list-group-item"><?= $user; ?></li>
            @endforeach
        </ul>

        <a href="/create" class="btn btn-primary mb-2 mt-1">Cadastrar</a>

    </div>
</body>
</html> 
