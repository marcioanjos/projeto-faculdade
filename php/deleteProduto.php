<?php
	include 'utils/config.php';

	$id = $_POST['id'];

	$linhaApagada = $db->exec("DELETE FROM produto WHERE idProduto = '$id'");
	if ($linhaApagada) {
		header("location: ../html/exibirProdutos.php");
	} else {
		echo 'Não foi possível excluir';
	}

?>