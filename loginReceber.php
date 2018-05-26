
<?php 

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	
	include'connect.php';
	$query = mysqli_query($conn,"SELECT login FROM login where login = '$login'");
	//saber quantas linhas foi retornada
	$linhas = mysqli_num_rows($query);
	//saber oq foi retornado 
	//$usuarios = mysqli_fetch_assoc($query);
	
	//se trouxe alguma linha sera encaminhado para a tela home
	if ($linhas > 0) {
		header("Location: home.html");
	}else{
		header("Location: telaLogin.html");
		 }
		?>