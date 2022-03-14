<?php
    // Estabelece uma ligação com a base de dados usando o programa abreconexao.php
    // A variável $conn é inicializada com a ligação estabelecida
    include "abreconexao.php";

    $query = "INSERT INTO utilizador (nome, idade, email, passwd) VALUES ('nomee', 10, 'swag@gmail.com', '123')";
    $res = mysqli_query($conn, $query); if ($res) {
    echo "Um novo registo inserido com sucesso";
    } else {
    echo "Erro: insert failed" . $query . "<br>" . mysqli_error($conn);
    }
    // Termina a ligação com a base de dados
    mysqli_close($conn);
?>
  