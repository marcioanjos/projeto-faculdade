<?php 

    include'utils/config.php';

    //verificar qual o id do quarto esta sendo resevando
    if(isset($_POST['01'])){
        $idQuarto = 1;
        $tipoQuarto = 'casal';
        }else if (isset($_POST['02'])) {
            $idQuarto = 2;
             $tipoQuarto = 'solteiro';
            }else if(isset($_POST['03'])){
                $idQuarto = 3;
                 $tipoQuarto = 'frente ao mar';
                }else if (isset($_POST['0'])) {
                    $idQuarto = 4;
                     $tipoQuarto = 'familia';
    }
    //verificar o sexo selecionado
    if (isset($_POST['05'])) {
            $sexo = "M";
    }else if(isset($_POST['06'])){
            $sexo = "F";
    }
    //receber as informaçoes de cliente
    $nome = $_POST['NOME'];
    $rg = $_POST['RG'];
    $cpf = $_POST['CPF'];
    $enderenco = $_POST['ENDERENÇO'];
    $numero = $_POST['NUMERO'];
    $complemeto = $_POST['COMPLEMENTO'];
    $bairro = $_POST['BAIRRO'];
    $cidade = $_POST['CIDADE'];
    $datanascimento = $_POST['DATANASCIMENTO'];
    $nacionalidade = $_POST['NACIONALIDADE'];
    $email = $_POST['E-MAIL'];
    $estadocivil = $_POST['ESTADOCIVIL'];
    $dataInicio = $_POST['DATAINICIO'];
    $dataFim = $_POST['DATAFIM'];

    //inserer na tabela clientes
    $linhasInseridas = $db->exec("INSERT INTO cliente (cpf, rg, nome, enderenco, numero, complemeto, bairro, cidade, cep, dataNascimento, nacionalidade, sexo, estadoCivil, email)
    values ('" . $cpf . "','" . $rg . "',' ". $nome ."',' " . $enderenco . " ',' " . $numero . " ',' " . $complemeto . " ',' " . $bairro . " ',' " . $cidade . " ',' " . $cep . " ',' " . $datanascimento . " ',' " . $nacionalidade . " ',' " . $sexo . " ',' " . $estadocivil . " ',' " . $email . " ')");
    
    //verifica se inseriu correto
    if ($linhasInseridas) {
		header("location: ../html/cliente.html");
	   } else {
		  echo 'Não foi possível inserir';    
	}
?>