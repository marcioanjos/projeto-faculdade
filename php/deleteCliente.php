<?php
	include 'utils/config.php';

	$id = $_POST['id'];

	$linhaApagada = $db->exec("DELETE FROM cliente WHERE idCliente = '$id'");
	if ($linhaApagada) {
		header("location: ../html/exibirClientes.php");
	} else {
		echo 'Não foi possível excluir';
	}

?>