<?php
	include 'utils/config.php';

	$id = $_POST['id'];
	$login = $_POST['login'];
	$senha = $_POST['senha']; 

	$linhasAtualizadas = $db->exec("UPDATE login SET login='".$login."', senha='".$senha."' WHERE id= '".$id."' ");
	if ($linhasAtualizadas) {
		echo 'Atualizado com sucesso';
	} else {
		echo 'Não foi possível atualizar';
	}

?>