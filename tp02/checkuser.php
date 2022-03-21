<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Estabelece uma ligação com a base de dados usando o programa abreconexao.php
    // A variável $conn é inicializada com a ligação estabelecida
    include "abreconexao.php";

    $nome = htmlspecialchars($_GET["nome"]);
    $passwd = htmlspecialchars($_GET["passwd"]);

    if (!$nome) {
        die("Nome de utilizador obrigatorio");
    }

    if (!$passwd) {
        die("Password de utilizador obrigatoria");
    }

    $query = "SELECT * FROM `utilizador` WHERE `nome`='$nome'";
    $res = mysqli_query($conn, $query);

    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);

        $valid_passwd = password_verify($passwd, $row["passwd"]);
        if ($valid_passwd) {
            echo "Utilizador <strong>{$row["nome"]}</strong> encontrado.<br/>O email é <strong>{$row["email"]}</strong>";
        } else {
            echo "Passwd errada";
        }
    } else {
        echo "Utilizador não encontrado";
    }

    // Termina a ligação com a base de dados
    mysqli_close($conn);
?>
  