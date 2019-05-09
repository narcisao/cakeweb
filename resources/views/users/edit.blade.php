@extends('layout')
@section('cabecalho')
    Edição de usuários
@endsection

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $errors)
                <li>{{ $errors }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">

    <div class="card mt-3 ">
        <h9 class="card-header">Edição de Usuário</h9>
        <div class="card-body">

            <form method="post">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <div class="form-row">
                        <div class="col">

                            <label for="email" class="">E-mail</label>
                            <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}">

                            <label for="usuario" class="">Usuário</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" value="{{ $user->usuario }}">

                        </div>
                        <div class="col">
                            <label for="nome" class="">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" value="{{ $user->nome }}">

                        </div>

                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="senha" class="">Senha</label>
                                <input type="password" class="form-control" name="senha" id="senha" value="{{ $user->senha }}">
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Altere a senha com pelo menos 6 caracteres
                                </small>
                            </div>

                            <div class="col">
                                <label for="senhac" class="">Senha (confirmação)</label>
                                <input type="password" class="form-control" name="senhac" id="senhac" value="{{ $user->senha }}">

                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Digite novamente a senha escolhida
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary mx-1">Atualizar</button>
                    <a href="/" class="btn btn-light mx-1"><i class="fas fa-angle-left"></i> Voltar</a>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>
