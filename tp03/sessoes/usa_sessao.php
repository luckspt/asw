<?php

// ============================================================================
// <b>Programa 2</b> - usa_sessao.php (recupera o estado de uma sessão já criada)
//            - Guardar em public_html/MMMMM/tp03/sessoes/
// ============================================================================

// Resposta é um documento de texto simples.
header("Content-Type: text/plain");

// Recupera o estado da sessão, assumindo que já tinha sido criada.
session_start();

printf("A sessão com ID '%s' foi criada ", session_id());

if (isset($_SESSION["desde"])) {
    printf("na seguinte data: %s", $_SESSION["desde"]);
} else {
    printf("nesta página.");
}

// ============================================================================

?>