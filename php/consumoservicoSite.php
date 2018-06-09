<?php
	include'utils/connect.php';
	
	$cpf= $_POST['cpf'];
	$servico= $_POST['Servico'];
	$qtd= $_POST['qtd'];
	
	//select para saber qual a id da reserva do cliente
	$query = $conn->query("SELECT idReserva FROM reserva where idcliente = (SELECT idCliente FROM cliente where cpf = '$cpf') ");
	$idCliente = mysqli_fetch_assoc($query);
	$idReserva = $idCliente['idReserva'];
	//select para saber o valor do serviço
	
	$query = $conn->query("SELECT valor FROM servico where idServico = '$servico' ");
	$val = mysqli_fetch_assoc($query);
	$valor = $val['valor'];
	$total = $valor * $qtd;

	include'utils/config.php';
	$linhasInseridas = $db->exec("INSERT INTO consumoreservaservico (idReserva, idServico, quantidade, valorUnitario, valorPago)
    values ('".$idReserva."','".$servico."',' ".$qtd."','".$valor."','".$total."')");

	if ($linhasInseridas) {
		header("location: ../html/sucessoSite.html");
	} else {
		echo 'Não foi possível excluir';
	}
    
?>