<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ReFood-FCUL</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../tp01/static/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../tp01/static/css/bootstrap-grid.min.css'>
    <script src='../../tp01/static/js/bootstrap.min.js'></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="entrada.php">
                <img src="../../tp01/static/img/logo.png" alt="" width="30" height="24">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="entrada.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nós</a>
                    </li>
                    <?php
                    if (isset($_SESSION['utilizador'])) {
                        echo "<li class='nav-item'><span class='nav-link'>{$_SESSION['utilizador']}</span></li>";
                    }
                    ?>
                </ul>
            </div>
            <?php
            if (isset($_SESSION['utilizador'])) {
                echo "<a class='btn btn-outline-danger' href='sair.php'>sair</a>";
            }
            ?>
        </div>
    </nav>

    <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="display-4 fw-bold">ReFood-FCUL</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">O movimento REFOOD (<a href="https://www.re-food.org">www.re-food.org</a>) tem como missão “resgatar alimentos, alimentar as pessoas e incluir toda a comunidade local, criando uma sociedade mais sustentável, justa e solidária”. Este movimento concretiza a sua missão através de uma rede de voluntários que recolhem e distribuem bens a pessoas necessitadas e de uma rede de instituições doadoras de bens alimentares em boas condições.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <a href="https://www.re-food.org">
                    <a href="autenticacao.php" class="btn btn-primary btn-lg px-4 me-sm-3 text-light">Iniciar Sessão</a>
                </a>
            </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
            <img src="../../tp01/static/img/refood.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>
</body>
</html>