<?php 

    include'utils/config.php';
    $descServico = $_POST['descServico'];
    $valor = $_POST['valor'];
    $status = $_POST['status'];

    $redirecionar = "../html/servico.html";

    $linhasInseridas = $db->exec("INSERT INTO servico (descServico, valor,status) values ('" . $descServico . "','". $valor ."' ,'" . $status . "')");
    if ($linhasInseridas) {
        header("location: $redirecionar");
    } else {
        echo 'Não foi possível inserir';
    }
    
?>
