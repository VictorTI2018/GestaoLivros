<div class='mb-3'>
    <div class="page-title">
        <p class="page-subtitle">Dados Usuario</p>
    </div>
</div>
<form id="user_form">
    <div class="row">
        <div class="form-group col-md-7">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="Username..." class="form-control">
        </div>
        <div class="form-group col-md-5">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" placeholder="Senha..." class="form-control">
        </div>
    </div>
</form>
<div class="row mt-2">
    <div class="col-md-2 offset-md-7">
        <button class="btn btn-danger btn-block text-white">Limpar</button>
    </div>
    <div class="col-md-3">
        <button class="btn btn-success btn-block" onclick="onSaveUser()">Cadastrar</button>
    </div>
</div>