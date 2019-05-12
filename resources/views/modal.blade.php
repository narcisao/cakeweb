
<form method="post">
    @csrf
    @method('DELETE')

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Você tem certeza que deseja excluir este usuário?
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary mx-1">Deletar</button>
                <button class="btn btn-secondary" type="button"  data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>


</form>