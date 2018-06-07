<?php 

include'utils/config.php';
include'inserirCliente.php';
//selecte no cliente para saber qual seu id
$query = $conn->query("SELECT idCliente FROM cliente where cpf = '$cpf'");
	
$linha = mysqli_fetch_assoc($query);

$idCliente = $linha['idCliente'];
//selec no quarto pra gera o valor da diaria
$query = $conn->query("SELECT valorSimples FROM quarto where idQuarto = '$idQuarto'");

$linha = mysqli_fetch_assoc($query);

$valor = $linha['valorSimples'];

 //inserido em reserva criando a reserva do cliente
    $linhasInseridas = $db->exec("INSERT INTO reserva (idCliente, idQuarto, dataInicio, dataFim, valorDiario, tipoQuartoSelecionado, chekin)
    values ('" . $idCliente . "','" . $idQuarto . "',' ". $dataInicio ."','". $dataFim ."','".$valor ."','".$tipoQuarto."','".$dataInicio."')");
    
?>