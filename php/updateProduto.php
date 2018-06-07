<?php
	include 'utils/config.php';

	if(isset($_POST['01'])){
        $tipoProduto = 1;
    }else if (isset($_POST['02'])) {
        $tipoProduto = 2;
    }

	$id = $_POST['id'];
	$descricao = $_POST['descProduto']; 
	$valor = $_POST['valor'];
	$quantidade = $_POST['qtd'];

	$linhasAtualizadas = $db->exec("UPDATE produto SET idTipoProduto='".$tipoProduto."', descProduto='".$descricao."', valorProduto = '".$valor."', quantidade = '".$quantidade."' WHERE idProduto= '".$id."' ");
	if ($linhasAtualizadas) {
		header("location: ../html/exibirProdutos.php");
	} else {
		echo 'Não foi possível atualizar';
	}

?>