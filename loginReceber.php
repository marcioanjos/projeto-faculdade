<?php 

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	include'banco.php';
	$query = $db->query("SELECT login FROM login where login = $_POST['login']");

	$linha = $query->fetch();
	$linha['login'];
	echo $linha

?>