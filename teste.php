<?php 
include'banco.php';
/*
$admin = mysqli_query($conexao,"SELECT login FROM login where login = 'thiago'");
$rows_admin = mysqli_num_rows($admin);
$tarefa = mysqli_fetch_assoc($admin);
var_dump($tarefa);
echo "<br>";
var_dump($admin);
echo "<br>";
var_dump($rows_admin);
if ($rows_admin > 0) {
	echo'<script>login_func_ok</script>';
	session_start();
	
}*/

$linhasInseridas = mysqli_execute($conexao,"INSERT INTO login (login, senha) values 'eduardo','123456789'");
	if ($linhasInseridas) {
		echo 'Inserido com sucesso';
	} else {
		echo 'Não foi possível inserir';
	}
?>