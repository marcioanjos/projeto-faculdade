<?php
	include 'utils/config.php';

	$id = $_POST['id'];
	$descricao = $_POST['descServico']; 
	$valor = $_POST['valor'];
	$status = $_POST['status'];

	$linhasAtualizadas = $db->exec("UPDATE servico SET  descServico ='".$descricao."', valor = '".$valor."', status = '".$status."' WHERE idServico= '".$id."' ");
	if ($linhasAtualizadas) {
		header("location: ../html/exibirSericos.php");
	} else {
		echo 'Não foi possível atualizar';
	}

?>