<?php 

    include'utils/config.php';

    
    if(isset($_POST['01'])){
        $tipoProduto = 1;
    }else if (isset($_POST['02'])) {
        $tipoProduto = 2;
    }
    
    $descProduto = $_POST['descProduto'];
    $valor = $_POST['valor'];
    $quantProduto = $_POST['qtd'];
    
    $linhasInseridas = $db->exec("INSERT INTO produto (idTipoProduto, descProduto, valorProduto, quatindade)
                                 values ('" . $tipoProduto . "','" . $descProduto . "',' ". $valor ."',' " . $quantProduto . " ')");
	
    if ($linhasInseridas) {
		header("location: ../html/produto.html");
	} else {
		echo 'Não foi possível inserir';
	}
?>