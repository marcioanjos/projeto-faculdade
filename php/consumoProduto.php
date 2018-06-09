<?php
	include'utils/connect.php';
	
	$cpf= $_POST['cpf'];
	$produto= $_POST['produto'];
	$qtd= $_POST['qtd'];
	
	//select para saber qual a id da reserva do cliente
	$query = $conn->query("SELECT idReserva FROM reserva where idcliente = (SELECT idCliente FROM cliente where cpf = '$cpf') ");
	$idCliente = mysqli_fetch_assoc($query);
	$idReserva = $idCliente['idReserva'];
	//select para saber o valor do serviço
	
	$query = $conn->query("SELECT valorProduto FROM produto where idProduto = '$produto' ");
	$val = mysqli_fetch_assoc($query);
	$valor = $val['valorProduto'];
	$total = $valor * $qtd;

	include'utils/config.php';
	$linhasInseridas = $db->exec("INSERT INTO consumoreservaproduto (idReserva, idProduto, quantidade, valorUnitario, valorPago)
    values ('".$idReserva."','".$produto."',' ".$qtd."','".$valor."','".$total."')");

	if ($linhasInseridas) {
		header("location: ../html/sucesso.html");
	} else {
		echo 'Não foi possível excluir';
	}
    
?>