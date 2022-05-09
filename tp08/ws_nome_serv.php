<?php
error_reporting(E_ERROR);

require_once "lib/nusoap.php";

function saudacao($nome)
{
    $horas = intval(date('H'));
    if ($horas > 6 and $horas < 12) {
        $s = "Bom Dia! ";
    } elseif ($horas >= 12 and $horas < 20) {
        $s = "Boa Tarde! ";
    } else {
        $s = "Boa Noite! ";
    }
    return $s . $nome;
}

$server = new soap_server();
$server->configureWSDL('cumpwsdl', 'urn:cumpwsdl');

// Vamos inserir aqui mais uma linha, na pergunta II-4

$server->register(
    "saudacao", // nome metodo
    array('nome' => 'xsd:string'), // input
    array('return' => 'xsd:string'), // output
    'uri:cumpwsdl', // namespace
    'urn:cumpwsdl#saudacao', // SOAPAction
    'rpc', // estilo
    'encoded' // uso
);

@$server->service(file_get_contents("php://input"));
