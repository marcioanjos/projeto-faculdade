<?php
	include'utils/connect.php';
	
	$query = $conn->query("SELECT * FROM servico");
	echo '<table  class="striped">';
	echo	" <tr> <th>ID</th> <th>Descrição</th> <th>Valor</th> <th>Status</th> </tr> ";
	while ($linha = mysqli_fetch_assoc($query)) {
		echo '<tr><td>'.$linha['idServico'].'</td>'.'<td>'.$linha['descServico'].'</td>'.'<td>'.$linha['valor'].'<td>'.$linha['status']."</td> </tr>";
	} 
	echo '</table>';
?>
