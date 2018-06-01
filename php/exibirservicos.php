<?php
	include'utils/connect.php';
	
	$query = $conn->query("SELECT * FROM produto");
	echo '<table  class="striped">';
	echo	" <tr> <th>ID</th> <th>idTipoProduto</th> <th>descProduto</th> <th>valorProduto</th> <th>quantidade</th> </tr> ";
	while ($linha = mysqli_fetch_assoc($query)) {
		echo '<tr><td>'.$linha['id'].'</td>'.'<td>'.$linha['idTipoProduto'].'</td>'.'<td>'.$linha['descProduto'].'<td>'.$linha['valorProduto'].'</td>' .'<td>'.$linha['quantidade']."</td> </tr>";
	} 
	echo '</table>';
?>
