<?php 

    include'utils/config.php';

    $tipoQuarto = $_POST['tipoQuarto'];//recebendo o tipo de quarto do formulario
    $descQuarto = $_POST['descQuarto'];//recebendo a descrição do quarto do formulario
    $valor = $_POST['valor'];//recebendo o valor do quarto do formulario
    $status = $_POST['status'];//recebendo o status do quarto do formulario

    $redirecionar = "../html/quarto.html";
    
    $linhasInseridas = $db->exec("INSERT INTO quarto (tipoQuarto, descricao, valorSimples, status) VALUES ('".$tipoQuarto."', '".$descQuarto."', ".$valor.", '".$status."')");
	
    if ($linhasInseridas) {
		header("location: $redirecionar");
	} else {
		echo 'Não foi possível inserir';
	}
?>