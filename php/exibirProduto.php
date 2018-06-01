<?php
	include'utils/connect.php';
	
	$query = $conn->query("SELECT * FROM produto");
	echo '<table  class="striped">';
	echo	" <tr> <th>ID</th> <th>descrição Produto</th> <th>Descrição Produto</th> <th>Valor Produto</th> <th>quantidade</th> </tr> ";
	while ($linha = mysqli_fetch_assoc($query)) {
		echo '<tr><td>'.$linha['idProduto'].'</td>'.'<td>'.$linha['idTipoProduto'].'</td>'.'<td>'.$linha['descProduto'].'<td>'.$linha['valorProduto'].'</td>' .'<td>'.$linha['quatindade']."</td> </tr>";
	} 
	echo '</table>';
?>
