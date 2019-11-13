<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
require_once('../conecta.php');
require_once('funcoes.php');

$json = file_get_contents('php://input');
$obj = json_decode($json);


$array = [];
$array = [$obj->idreag];

$resultado = excluirReagenteCD($conexao, $array);


if($resultado) {
	echo "Reagente excluido da Tabela Reagentes";
} else {
	echo "Erro ao deletar o Reagente, tente novamente";
}