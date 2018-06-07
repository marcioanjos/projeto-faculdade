<?php
	$cpf= $_POST['cpf'];
	$servico= $_POST['Servico'];
	$qtd= $_POST['qtd'];

	/*$query = $conn->query("SELECT idCliente FROM cliente where cpf = $cpf");
	$idCliente = mysqli_fetch_assoc($query);
	$query = $conn->query("SELECT idReserva FROM reserva where idCliente = $idCliente");
	$idReserva = mysqli_fetch_assoc($query);*/
	$query = $conn->query("SELECT idReserva FROM reserva where idcliente = (SELECT idCliente FROM cliente where cpf = $cpf) ");
	/*SELECT  res.idReserva FROM cliente cli 
INNER JOIN reserva res ON res.idcliente = cli.idCliente
WHERE cli.cpf = ''*/

SELECT a, b, c, d e INTO select asdasd form ...
?>