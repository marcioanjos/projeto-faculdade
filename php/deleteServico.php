<?php
	include 'utils/config.php';

	$id = $_POST['id'];

	$linhaApagada = $db->exec("DELETE FROM servico WHERE idServico = '$id'");
	if ($linhaApagada) {
		header("location: ../html/exibirServicos.php");
	} else {
		echo 'Não foi possível excluir';
	}

?>