<?php 

include'config.php';
$linhasInseridas = $db->exec("INSERT INTO login (login, senha) values ('teste','teste')");
	if ($linhasInseridas) {
		echo 'Inserido com sucesso';
	} else {
		echo 'Não foi possível inserir';
	}
?>