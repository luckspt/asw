<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ReFood-FCUL</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../tp01/static/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../tp01/static/css/bootstrap-grid.min.css'>
    <script src='../tp01/static/js/bootstrap.min.js'></script>

    <?php
    if (isset($_SESSION["fcolor"]) and isset($_SESSION["bgcolor"])) {
        echo '<style>';
        echo "body {";
        echo "color: {$_SESSION['fcolor']};";
        echo "background-color: {$_SESSION['bgcolor']};";
        echo "}";
        echo "</style>";
    }
    ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index-refood.php">
                <img src="../tp01/static/img/logo.png" alt="" width="30" height="24">
              </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index-refood.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nós</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="display-4 fw-bold">ReFood-FCUL</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">O movimento REFOOD (<a href="https://www.re-food.org">www.re-food.org</a>) tem como missão “resgatar alimentos, alimentar as pessoas e incluir toda a comunidade local, criando uma sociedade mais sustentável, justa e solidária”. Este movimento concretiza a sua missão através de uma rede de voluntários que recolhem e distribuem bens a pessoas necessitadas e de uma rede de instituições doadoras de bens alimentares em boas condições.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <a href="https://www.re-food.org">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Saber mais</button>
                </a>
            </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
            <img src="../tp01/static/img/refood.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-4">
                    56926 Lucas,
                    <?php

                        if (!isset($_SESSION['views'])) {
                            $_SESSION['views'] = 1;
                        } else {
                            $_SESSION['views']++;
                        }

                        echo "{$_SESSION['views']} acesso";

                        if ($_SESSION['views'] != 1) {
                            echo 's';
                        }
                    ?>
                </div>
                <div class="col-2 ">
                    <form action="cores/regista_cores.php" method="post">
                        <p>Escolha uma cor para o texto:
                            <select name="fcolor">
                                <option value="#0000ff" selected="selected">Azul</option>
                                <option value="#ffffff">Branco</option>
                                <option value="#000000">Preto</option>
                                <option value="#00ff00">Verde</option>
                                <option value="#ff0000">Vermelho</option>
                            </select>
                        </p>

                        <p>Escolha uma cor para o fundo:
                            <select name="bgcolor">
                                <option value="#0000ff">Azul</option>
                                <option value="#ffffff">Branco</option>
                                <option value="#000000" selected="selected">Preto</option>
                                <option value="#00ff00">Verde</option>
                                <option value="#ff0000">Vermelho</option>
                            </select>
                        </p>

                        <input type="submit" value="Registar cores na sessão"/>
                    </form>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>