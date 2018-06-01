<?php
	include'utils/connect.php';
	
	$query = $conn->query("SELECT * FROM quarto");
	echo '<table  class="striped">';
	echo	" <tr> <th>ID</th> <th>QUARTOS</th> <th>Descrição</th> <th>Valor</th> <th>Status</th> </tr> ";
	while ($linha = mysqli_fetch_assoc($query)) {
		echo '<tr><td>'.$linha['idQuarto'].'</td>'.'<td>'.$linha['tipoQuarto'].'</td>' . '<td>'.$linha['descricao'].'</td>'.'<td>'.$linha['valorSimples'].'<td>'.$linha['status']."</td> </tr>";
	} 
	echo '</table>';
?>
