<?php  
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

require_once('../conecta.php');
require_once('funcoes.php');

$nomeReagente = $_REQUEST['NOME_USUAL'];
$array = [];
$array = [$nomeReagente];
$reagente = buscarReagenteCD($conexao, $array);
if($reagente) {
	echo json_encode($reagente);	
} else {
	$status = array('status' => 'Não existe reagentes com esse nome');
	echo json_encode($status);
}


?>