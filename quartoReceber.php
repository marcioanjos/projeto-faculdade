<?php

$tipoQuarto = $_POST['tipoQuarto'];//recebendo o tipo de quarto do formulario
$descQuarto = $_POST['descQuarto'];//recebendo a descrição do quarto do formulario
$valor = $_POST['valor'];//recebendo o valor do quarto do formulario
$status = $_POST['status'];//recebendo o status do quarto do formulario

include 'banco.php';



try{
$linhasInseridas =$conexao->exec("INSERT INTO quarto (tipoQuarto, descricao, valorSimples, status) 
	VALUES ('".$tipoQuarto."', '".$descQuarto."', ".$valor.", '".$status."')");

if($linhasInseridas){
	echo 'Inserido com sucesso!';
}else{
	echo 'Não foi possivel inserir!';
}

	return self::conexao;
}catch(PDOException $e){
	self::error_log(_FILE_, __FUNCTION__, $e->getMessage());
}


?>