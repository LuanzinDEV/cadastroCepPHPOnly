<?php

require_once "Conexao.php";

$url = "https://viacep.com.br/ws/";

$cep = $_GET['cep'];

$cep = preg_replace('/[^0-9]/im', '',$cep);

$get = file_get_contents($url . $cep . "/json");

if($get===false){
    echo ("Erro na requisição via CEP, alterando api") . PHP_EOL;

    $url = "https://cdn.apicep.com/file/apicep/";

    $zipcodeFormated = substr($cep,0, 5) . '-' . substr($cep, 5);

    $get = file_get_contents($url . $zipcodeFormated . '.json');

    $endereco = json_decode($get, true);

}
    
$endereco = json_decode($get, true);  

if(json_last_error() !== JSON_ERROR_NONE){
    throw new RuntimeException("Erro no json decode");
}

