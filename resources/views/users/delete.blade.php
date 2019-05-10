@extends('layout')
@section('cabecalho')
    Exclusão de usuários
@endsection

<div class="container">

    <div class="card mt-3 ">
        <h9 class="card-header">Exclusão de Usuário</h9>
        <div class="card-body">

                <div class="form-group">
                    <div class="form-row">
                        <div class="col">

                            <label for="email" class="">E-mail</label>
                            <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}" readonly>

                            <label for="usuario" class="">Usuário</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" value="{{ $user->usuario }}" readonly>

                        </div>
                        <div class="col">
                            <label for="nome" class="">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" value="{{ $user->nome }}" readonly>

                        </div>

                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="senha" class="">Senha</label>
                                <input type="password" class="form-control" name="senha" id="senha" value="{{ $user->senha }}" readonly>

                            </div>

                            <div class="col">
                                <label for="senhac" class="">Senha (confirmação)</label>
                                <input type="password" class="form-control" name="senhac" id="senhac" value="{{ $user->senha }}" readonly>

                            </div>
                        </div>
                    </div>
                </div>

                <form method="post">
                    @csrf
                    @method('DELETE')
                    @extends('teste')
<!-- INSERIR O MODAL PARA CONFIRMAR SE VAI EXCLUIR DE FATOOOO -->
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary mx-1">Deletar</button>

                        <a href="/" class="btn btn-light mx-1"><i class="fas fa-angle-left"></i> Voltar</a>
                    </div>
            </form>
            <button class="btn btn-primary mx-1" data-toggle="modal" data-target="#delete">abrir pop</button>

    </div>

<!--
<div id="delete" class="modal fade text-danger" role="dialog">
   <div class="modal-dialog ">
     <form action="" id="deleteForm" method="post">
         <div class="modal-content">
             <div class="modal-header bg-danger">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title text-center">DELETE CONFIRMATION</h4>
             </div>
             <div class="modal-body">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
                 <p class="text-center">Are You Sure Want To Delete ?</p>
             </div>
             <div class="modal-footer">
                 <center>
                     <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                     <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
                 </center>
             </div>
         </div>
     </form>
   </div>
  </div>
  -->


</body>
</html>
