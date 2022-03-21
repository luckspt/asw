<?php
    $nomebolinho = "56926";
    if(!isset($_COOKIE[$nomebolinho])) {
        echo "Não existe " . $nomebolinho;
    } else {
        echo $nomebolinho . " existe!<br>";
        echo "O seu valor é " . $_COOKIE[$nomebolinho];
    }
?>