<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Tarefas</title>
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/padrao.css">
    <link rel="stylesheet" href="public/assets/css/sistema.css">
</head>

<body>
    <div id="sistema">
        <header class="sistema-header">
            <div class="user-dropdown">
                <div class="user-button">
                    <span class="d-none d-sm-block">Olá, <?= $_SESSION['USER']['USERNAME']; ?></span>
                    <div class="user-dropdown-img">
                        <img class="user-avatar" src="public/img/avatar.png" alt="avatar">
                    </div>
                </div>
                <div class="user-dropdown-content">
                    <a href="#">Perfil</a>
                    <a href="#"> Sair</a>
                </div>
            </div>
        </header>
        <aside class="sistema-aside">
            <div class="sistema-aside-title">
                <img class="sistema-aside-logo" src="public/img/logo1.png" alt="logo">
            </div>
            <div class="topnav">
                <a class="active" href="#home">Home</a>
                <a href="#news">Usuarios</a>
                <a href="#contact">Clientes</a>
                <a href="#about">Livros</a>
            </div>
        </aside>
        <main class="sistema-main">
            <section class="sistema-content">
                <?php require $layout->load(); ?>
            </section>
        </main>
        <footer class="sistema-footer"></footer>
    </div>

    <script src="public/assets/js/jquery.min.js"></script>
    <script src="public/assets/js/bootstrap.min.js"></script>
    <script src="public/assets/js/geral.js"></script>
    <script src="public/assets/app/dashboard/index.js"></script>
</body>

</html>