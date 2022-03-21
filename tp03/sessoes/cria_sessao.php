<?php

// ============================================================================
// <b>Programa 1</b> - cria_sessao.php (cria uma nova sessão)
//            - Guardar em public_html/56926/tp03/sessoes/
// ============================================================================

// Cria uma nova sessão, assumindo que é a primeira visita a este servidor Web.
session_start();

// O estado da sessão é composto apenas pela variável
// 'desde' que guarda a data em que a sessão foi criada.
if (!isset($_SESSION["desde"])) {
    $_SESSION["desde"] = date("d.m.Y G:i");
}

// ============================================================================

?>