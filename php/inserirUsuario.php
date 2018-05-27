<?php 

    include'utils/config.php';

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $redirecionar = "../html/usuario.html";

    $linhasInseridas = $db->exec("INSERT INTO login (login, senha) values ('" . $login . "','". $senha . "')");
	if ($linhasInseridas) {
		header("location: $redirecionar");
	} else {
		echo 'Não foi possível inserir';
	}
?>