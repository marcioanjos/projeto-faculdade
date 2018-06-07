<?php
	include 'utils/config.php';

	$id = $_POST['id'];
	$login = $_POST['login'];
	$senha = $_POST['senha']; 

	$linhasAtualizadas = $db->exec("UPDATE login SET login='".$login."', senha='".$senha."' WHERE id= '".$id."' ");
	if ($linhasAtualizadas) {
		header("location: ../html/exibirUsuarios.php");
	} else {
		echo 'Não foi possível atualizar';
	}

?>