<?php 

    include'utils/config.php';

    $descProduto = $_POST['descProduto'];
    $valor = $_POST['valor'];
    $quantProduto = $_POST['qtd'];

    $redirecionar = "../html/produto.html";
    
    $linhasInseridas = $db->exec("INSERT INTO produto (descProduto, valorProduto, quatindade) values ('" . $descProduto . "',' ". $valor ."',' " . $quantProduto . " ')");
	
    if ($linhasInseridas) {
		header("location: $redirecionar");
	} else {
		echo 'Não foi possível inserir';
	}
?>