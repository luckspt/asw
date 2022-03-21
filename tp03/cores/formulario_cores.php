<?php

// ============================================================================
// <b>Programa 4</b> - formulario_cores.php (escolha de cores pelo utilizador)
//            - Guardar em public_html/sessoes/
// ============================================================================

// Cria ou recupera a sessão com este utilizador.
session_start();

// ============================================================================
?>

    <html>
    <head><title>Formulário de escolha de cores</title>

        <?php
        // ============================================================================

        // Aplica as cores se já tiverem sido escolhidas pelo utilizador.
        if (isset($_SESSION["fcolor"]) and isset($_SESSION["bgcolor"])) {
            echo '<style>';
            echo "body {";
            echo "color: {$_SESSION['fcolor']};";
            echo "background-color: {$_SESSION['bgcolor']};";
            echo "}";
            echo "</style>";
        }

        // ============================================================================
        ?>

    </head>

    <body>
    <p><b>Formulário de escolha de cores</b></p>

    <form action="regista_cores.php" method="post">

        <p>Escolha uma cor para o texto:&amp;nbsp;
            <select name="cor_texto">
                <option value="#0000ff">Azul</option>
                <option value="#ffffff">Branco</option>
                <option value="#000000" selected="selected">Preto</option>
                <option value="#00ff00">Verde</option>
                <option value="#ff0000">Vermelho</option>
            </select>
        </p>

        <p>Escolha uma cor para o fundo:&amp;nbsp;
            <select name="cor_fundo">
                <option value="#0000ff">Azul</option>
                <option value="#ffffff" selected="selected">Branco</option>
                <option value="#000000">Preto</option>
                <option value="#00ff00">Verde</option>
                <option value="#ff0000">Vermelho</option>
            </select>
        </p>

        <input type="submit" value="Registar cores na sessão"/>

    </form>

    </body>
    </html>

<?php
// ============================================================================
?>