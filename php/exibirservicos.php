<?php
	include'utils/connect.php';
	
	$query = $conn->query("SELECT * FROM servico");
	echo '<table  class="striped">';
	echo	" <tr> <th>ID</th> <th>descProduto</th> <th>valorProduto</th> <th>status</th> </tr> ";
	while ($linha = mysqli_fetch_assoc($query)) {
		echo '<tr><td>'.$linha['idServico'].'</td>'.'<td>'.$linha['descServico'].'<td>'.$linha['valor'].'</td>'.'<td>'.$linha['status']."</td> </tr>";
	} 
	echo '</table>';
?>
