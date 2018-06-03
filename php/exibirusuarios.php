<?php
	include'utils/connect.php';
	
	$query = $conn->query("SELECT * FROM login");
	echo '<table  class="striped">';
	echo	" <tr> <th>ID</th> <th>USUARIOS</th> </tr> ";
	while ($linha = mysqli_fetch_assoc($query)) {
		echo '<tr><td>'.$linha['id'].'</td>'.'<td>'.$linha['login']."</td></tr>";
	} 
	echo '</table>';
?>
