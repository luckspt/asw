<?php
session_start();

if (isset($_SESSION["utilizador"]))
    header('Location: sair.php');
else {
    echo "
    <form action='processa_autenticacao.php' method='post'>
        <input type='email' name='email' placeholder='email'><br/>
        <input type='password' name='passwd' placeholder='senha'><br/>
        <input type='submit' value='submeter'>
    </form>
    ";
}