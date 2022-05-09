<?php
require_once "lib/nusoap.php";
$client = new nusoap_client(
    'http://appserver-01.alunos.di.fc.ul.pt/~asw26/56945/tp08/ws_nome_serv.php'
);
$error = $client->getError();
$result = $client->call('saudacao', array('nome' => $_POST["nome"]));    //handle errors

echo "<h2>Pedido</h2>";
echo "<pre>" . htmlspecialchars($client->request, ENT_QUOTES) . "</pre>";
echo "<h2>Resposta</h2>";
echo "<pre>" . htmlspecialchars($client->response, ENT_QUOTES) . "</pre>";

if ($client->fault) {    //check faults
    echo "<h2>Falha: $error</h2>";
} else {
    $error = $client->getError();    //handle errors
    echo "<h2>$result</h2>";
}
