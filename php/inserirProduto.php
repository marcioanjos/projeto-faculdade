<?php 

    include'utils/config.php';

    $tipoProduto = $_POST['tipoProduto'];
    $descProduto = $_POST['descProduto'];
    $valor = $_POST['valor'];
    $quantProduto = $_POST['qtd'];

    $redirecionar = "../html/produto.html";
    
    $linhasInseridas = $db->exec("INSERT INTO produto (descProduto, idTipoProduto, valorProduto, quatindade) values ('" . $descProduto . "', ". $tipoProduto . ", ". $valor . ", " . $quantProduto . " )");
	
    if ($linhasInseridas) {
		header("location: $redirecionar");
	} else {
		echo 'Não foi possível inserir';
	}
?>