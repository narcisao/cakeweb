@extends('layout')
@section('cabecalho')
    Exclusão de usuários
@endsection

<div class="container">

    <div class="card mt-3 ">
        <h9 class="card-header">Usuário</h9>
        <div class="card-body">

            <form method="post">
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
                                <input type="text" class="form-control" name="senha" id="senha">
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Crie uma senha com pelo menos 6 caracteres
                                </small>
                            </div>

                            <div class="col">
                                <label for="senhac" class="">Senha (confirmação)</label>
                                <input type="text" class="form-control">
                                <!--<input type="text" class="form-control" name="senhac" id="senhac">-->

                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Digite novamente a senha escolhida
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <form method="post">
                    <!-- INSERIR O MODAL PARA CONFIRMAR SE VAI EXCLUIR DE FATOOOO -->
                    @csrf
                    @method('DELETE')
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary mx-1">Deletar</button>

                        <a href="/" class="btn btn-light mx-1"><i class="fas fa-angle-left"></i> Voltar</a>

                    </div>
            </form>

            </form>
        </div>
    </div>
</div>

</body>
</html>
