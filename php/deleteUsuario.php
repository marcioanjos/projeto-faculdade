<?php
	include 'utils/config.php';

	$id = $_POST['id'];

	$linhaApagada = $db->exec("DELETE FROM login WHERE id = '$id'");
	if ($linhaApagada) {
		header("location: ../html/exibirUsuarios.php");
	} else {
		echo 'Não foi possível excluir';
	}

?>