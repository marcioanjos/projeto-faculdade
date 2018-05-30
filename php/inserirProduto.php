<?php 

    include'utils/config.php';

    $descProduto = $_POST['descProduto'];
    $valor = $_POST['valor'];
    $quantProduto = $_POST['qtd'];
    
    $linhasInseridas = $db->exec("INSERT INTO produto (descProduto, valorProduto, quatindade) values ('" . $descProduto . "',' ". $valor ."',' " . $quantProduto . " ')");
	
    if ($linhasInseridas) {
		header("location: ../html/produto.html");
	} else {
		echo 'Não foi possível inserir';
	}
?>