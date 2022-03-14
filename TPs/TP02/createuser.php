<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Estabelece uma ligação com a base de dados usando o programa abreconexao.php
    // A variável $conn é inicializada com a ligação estabelecida
    include "abreconexao.php";

    $nome = htmlspecialchars($_POST["nome"]);
    $idade = htmlspecialchars($_POST["idade"]);
    $email = htmlspecialchars($_POST["email"]);
    $passwd =htmlspecialchars($_POST["passwd"]);

    if (!$nome) {
        die("Nome de utilizador obrigatorio");
    }

    if (!$idade) {
        die("Idade de utilizador obrigatoria");
    }

    if (!$email) {
        die("Email de utilizador obrigatorio");
    }

    if (!$passwd) {
        die("Password de utilizador obrigatoria");
    }

    $passwd = password_hash($passwd, PASSWORD_BCRYPT);

    $query = "INSERT INTO utilizador (nome, idade, email, passwd) VALUES ('$nome', $idade, '$email', '$passwd')";
    $res = mysqli_query($conn, $query);
    
    if ($res) {
        echo "Um novo registo inserido com sucesso";
    } else {
        echo "Erro: insert failed" . $query . "<br>" . mysqli_error($conn);
    }

    // Termina a ligação com a base de dados
    mysqli_close($conn);
?>
  