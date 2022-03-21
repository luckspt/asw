<?php

// ============================================================================
// <b>Programa 5</b> - regista_cores.php (registo das cores preferidas do utilizador)
//            - Guardar em public_html/sessoes/
// ============================================================================

// Cria ou recupera a sessão onde são guardadas as cores.
session_start();

// Guarda as cores escolhidas pelo utilizador na sessão.
$_SESSION["fcolor"] =
    isset($_POST["fcolor"]) ? $_POST["fcolor"] : "#000000";

$_SESSION["bgcolor"] =
    isset($_POST["bgcolor"]) ? $_POST["bgcolor"] : "#ffffff";

echo $_SESSION["fcolor"];
echo $_SESSION["bgcolor"];
// ============================================================================

echo "<html>";
echo "<head><title>Registo de cores na sessão</title>";

// ============================================================================

// Aplica nesta mesma página as cores escolhidas pelo utilizador.
if (isset($_SESSION["fcolor"]) and isset($_SESSION["bgcolor"])) {
    echo '<style>';
    echo "body {";
    echo "color: " . $_SESSION["fcolor"] . ";";
    echo "background-color: " . $_SESSION["bgcolor"] . ";";
    echo "}";
    echo "</style>";
}

// ============================================================================

echo "</head>";
echo "<body>";

echo "<p>As cores foram registadas na sessão com ID '" .
    session_id() . "'.</p>";

echo '<p>Voltar ao <a href="javascript:history.back()">formulário ' .
    'de escolha de cores</a>.</p>';

echo "</body>";
echo "</html>";

// ============================================================================

?>