<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	include'banco.php';

	function buscar_tarefas($conexao)
	{
		$sqlBusca = 'SELECT * FROM login where login = "marcio"';
		$resultado = mysqli_query($conexao, $sqlBusca);
		$tarefas = array();
			while ($tarefa = mysqli_fetch_assoc($resultado)) {
				$tarefas[] = $tarefa;
			}
		return $tarefas;
	}
	$a = buscar_tarefas($conexao);
	$b ="";
?>
<a href="teste.php"></a>
</body>
</html>