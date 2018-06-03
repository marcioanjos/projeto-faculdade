<?php
	include 'utils/config.php';

	$id = $_POST['id'];

	$linhaApagada = $db->exec("DELETE FROM quarto WHERE idQuarto = '$id'");
	if ($linhaApagada) {
		header("location: ../html/exibirQuartos.php");
	} else {
		echo 'Não foi possível excluir';
	}

?>