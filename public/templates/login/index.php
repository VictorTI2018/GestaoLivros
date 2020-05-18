<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Livros</title>
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/padrao.css">
    <link rel="stylesheet" href="public/assets/css/login.css">
</head>
<body>
    <div id="app">
        <header class="login-header">
            <img class="logo" src="public/img/logo1.png" alt="Logo">
        </header>
        <main class="login-main">
            <section class="login-content">
                <?php require $layout->load(); ?>
            </section>
        </main>
        <footer class="login-footer">
        </footer>
    </div>
    <script src="public/assets/js/jquery.min.js"></script>
    <script src="public/assets/js/bootstrap.min.js"></script>
    <script src="public/assets/js/geral.js"></script>
    <script src="public/assets/app/login/index.js"></script>
</body>
</html>