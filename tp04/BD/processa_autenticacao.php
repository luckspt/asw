<?php
require_once '../../tp02/abreconexao.php';

$email = htmlspecialchars($_POST["email"]);
$passwd = htmlspecialchars($_POST["passwd"]);

if (!$email) {
    die("Email de utilizador obrigatorio");
}

if (!$passwd) {
    die("Password de utilizador obrigatoria");
}

$query = $conn->prepare("SELECT * FROM `utilizador` WHERE `email`=?");
$query->bind_param('s', $email);
$query->execute();

$res = $query->get_result();
$row = $res ->fetch_assoc();
mysqli_close($conn);

if ($row && password_verify($passwd, $row["passwd"])) {
    session_start();
    $_SESSION["utilizador"] = $email;
    header('Location: registo.php');
} else
    header('Location: autenticacao.php');
// Termina a ligação com a base de dados
