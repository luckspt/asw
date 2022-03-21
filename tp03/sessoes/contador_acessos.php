<?php
// ============================================================================
// <b>Programa 3</b> - contador_acessos.php (conta o número de acessos do utilizador)
//            - Guardar em public_html/MMMMM/tp03/sessoes/
// ============================================================================

// Resposta é um documento de texto simples.
header("Content-Type: text/plain");

// Cria ou recupera uma sessão.
session_start();

// O estado da sessão passa a incluir um contador de acessos.
if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 1;
} else {
    $_SESSION["contador"]++;
}

printf("Na sessão com ID '%s' o contador de acessos vai em %d.",
    session_id(), $_SESSION["contador"]);

// ============================================================================

?>