<?php
	include'utils/connect.php';
	$query = mysqli_query($conn,"SELECT login FROM login where login = '$login' AND senha = '$senha'");
	
	
	


?>