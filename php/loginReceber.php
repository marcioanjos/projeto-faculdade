
<?php 

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	
	include'utils/connect.php';
	$query = mysqli_query($conn,"SELECT login FROM login where login = '$login' AND senha = '$senha'");
	//saber quantas linhas foi retornada
	$linhas = mysqli_num_rows($query);
	//saber oq foi retornado 
	//$usuarios = mysqli_fetch_assoc($query);
	
	//se trouxe alguma linha sera encaminhado para a tela home
	if ($linhas > 0) {
		header("Location: ../html/home.html");
	}else{
		header("Location: ../index.html");
		 }
?>