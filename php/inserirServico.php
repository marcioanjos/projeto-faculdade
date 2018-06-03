<?php 
    include'utils/config.php';
    $descServico = $_POST['descServico'];
    $valor = $_POST['valor'];
    $status = $_POST['status'];

    $linhasInseridas = $db->exec("INSERT INTO servico (descServico, valor,status) values ('" . $descServico . "','". $valor ."' ,'" . $status . "')");
   
    if ($linhasInseridas) {
        header("location: ../html/servico.html");
    } else {
        echo 'Não foi possível inserir';
    }
?>
