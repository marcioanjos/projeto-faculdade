<?php 

    include'utils/config.php';

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $linhasInseridas = $db->exec("INSERT INTO login (login, senha) values ('" . $login . "','". $senha . "')");
	if ($linhasInseridas) {
		header("location: ../html/usuario.html");
	} else {
		echo 'Não foi possível inserir';
	}
?>