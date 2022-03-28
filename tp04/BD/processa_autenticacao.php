<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
$query->execute([$email]);

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
