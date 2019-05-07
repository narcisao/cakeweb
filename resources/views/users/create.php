<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Listagem de usuários </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
<body>

    <div class="container">

        <div class="card mt-3 ">
            <h9 class="card-header">Usuário</h9>
                <div class="card-body">

                    <form method="post">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="email" class="">E-mail</label>
                                    <input type="text" class="form-control" name="email" id="email">

                                    <label for="usuario" class="">Usuário</label>
                                    <input type="text" class="form-control" name="usuario" id="usuario">

                                </div>
                                <div class="col">
                                    <label for="nome" class="">Nome</label>
                                    <input type="text" class="form-control" name="nome" id="nome">


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
                                            <label for="nome" class="">Senha (confirmação)</label>
                                            <input type="text" class="form-control" name="nome" id="nome">

                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                Digite novamente a senha escolhida
                                            </small>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-primary mx-1">Salvar</a>
                            <a href="/" class="btn btn-light mx-1"><i class="fas fa-angle-left"></i> Voltar</a>
                        </div>

                    </form>
                </div>
        </div>
    </div>


</body>
</html>
