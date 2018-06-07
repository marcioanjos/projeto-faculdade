<?php
	include'utils/connect.php';
	
	$query = $conn->query("SELECT * FROM cliente");
	echo '<table  class="striped">';
	echo	" <tr> <th>ID</th> <th>CPF</th> <th>RG</th> <th>Nome</th> <th>Endereço</th> <th>Número</th> <th>Complemento</th> <th>Bairro</th>
	<th>Cidade</th> <th>Cep</th> <th>DataNascimento</th> <th>Nacionalidade</th> <th>Sexo</th> <th>EstadoCivil</th> <th>E-mail</th></tr> ";
	while ($linha = mysqli_fetch_assoc($query)) {
		echo '<tr><td>'.$linha['idCliente'].'</td>'.'<td>'.$linha['cpf'].'</td>' . '<td>'.$linha['rg'].'</td>'.'<td>'.$linha['nome'].'<td>'.$linha['enderenco'].'</td>'.'<td>'.$linha['numero'].'</td>'.'<td>'.$linha['complemeto'].'</td>'.'<td>'.$linha['bairro'].'</td>'.'<td>'.$linha['cidade'].'</td>'.'<td>'.$linha['cep'].'</td>'.'<td>'.$linha['dataNascimento'].'</td>'.'<td>'.$linha['nacionalidade'].'</td>'.'<td>'.$linha['sexo'].'</td>'.'<td>'.$linha['estadoCivil'].'</td>'.'<td>'.$linha['email']."</td></tr>";
	} 
	echo '</table>';
?>
