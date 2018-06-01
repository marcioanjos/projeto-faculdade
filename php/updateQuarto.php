<?php
	include 'utils/config.php';

	$id = $_POST['id'];
	$tipoQuarto = $_POST['tipoQuarto'];
	$descricao = $_POST['descQuarto']; 
	$valor = $_POST['valor'];
	$status = $_POST['status'];

	$linhasAtualizadas = $db->exec("UPDATE quarto SET tipoQuarto='".$tipoQuarto."', descricao='".$descricao."', valorSimples = '".$valor."', status = '".$status."' WHERE idQuarto= '".$id."' ");
	if ($linhasAtualizadas) {
		echo 'Atualizado com sucesso';
	} else {
		echo 'Não foi possível atualizar';
	}

?>