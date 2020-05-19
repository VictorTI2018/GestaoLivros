<span class="mb-3">
    <div class="row mb-3">
        <div class="col-md-2">
            <a href="/user_view_register" class="btn btn-success btn-block">Novo Usuario</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                <input type="search" name="term" id="term" placeholder="Buscar..." class="form-control">
            </div>
        </div>
        <div class="col-md-2">
            <button onclick="applyFilter()" class="btn btn-primary btn-block">Buscar</button>
        </div>
    </div>
</span>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Username</th>
            <th>Data Criado</th>
            <th colspan="2">Ações</th>
        </tr>
    </thead>
    <tbody id="usuarioRows"></tbody>
</table>
<div class="modal fade" id="userEditModal" tabindex="-1" role="dialog" aria-labelledby="userEditModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userEditModalLabel">Editar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="user_edit_form">
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success" onclick="editUser()">Atualizar</button>
            </div>
        </div>
    </div>
</div>