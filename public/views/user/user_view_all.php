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