<?php
	include'utils/connect.php';
	
	$cpf= $_POST['cpf'];

	//select para saber qual a id da reserva do cliente
	$query = $conn->query("SELECT idReserva FROM reserva where idcliente = (SELECT idCliente FROM cliente where cpf = '$cpf') ");
	$idCliente = mysqli_fetch_assoc($query);
	$idReserva = $idCliente['idReserva'];
	
	//select para saber o valor do serviço consumindo
	$query = $conn->query("SELECT SUM(valorPago) FROM consumoreservaservico where idReserva = '$idReserva' ");
	$valR = mysqli_fetch_assoc($query);
	$valorServico = $valR['SUM(valorPago)'];
	//select para saber o valor do produtos consumidos
	$query = $conn->query("SELECT SUM(valorPago) FROM consumoreservaproduto where idReserva = '$idReserva' ");
	$valP = mysqli_fetch_assoc($query);
	$valorProduto = $valP['SUM(valorPago)'];
	
	$query = $conn->query("SELECT valorDiario FROM reserva where idReserva = '$idReserva' ");
	$valQ = mysqli_fetch_assoc($query);
	$valorQuarto = $valQ['valorDiario'];


	$valorTotal = $valorServico + $valorProduto + $valorQuarto;
	//select para gera o dia do inicio e fim da reserva para saber o valor do quarto
	/*$query = $conn->query("SELECT dataInicio,dataFim FROM reserva where idReserva = '$idReserva' ");
	$data = mysqli_fetch_assoc($query);
	$date = $data['dataInicio'] - $data['dataFim'];
	var_dump($data);*/
	
	/*$query = $conn->query("SELECT valorSimples FROM quarto INNER JOIN reserva ON 'quarto.idQuarto' = 'reserva.idQuarto' && idReserva = '$idReserva' ");
	
	$valQ = mysqli_fetch_assoc($query);
	$valorQuarto = $valQ['valorSimples'];
	var_dump($valorQuarto);

	echo $valorQuarto;*//*if ($idCliente) {
		header("location: ../html/valorAPagar.html");
	} else {
		echo 'Não foi possível excluir';
	}*/
?>
	<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Hotel ads</title>
        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="../css/hotmenu.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="../js/script.js" type="text/javascript"></script>
        <style>
        	a{
        		color:white;
        	}

        </style>
    </head>

    <body>
        <!--Menu Principal-->
        <nav class="black" role="navigation">
    		<div class="nav-wrapper container"><a id="logo-container" class="brand-logo">ADS</a>
    	</div>
 		 </nav>
       
        <div class="container">
            <h2 class="header center orange-text">Total a Pagar</h2>
          <?php echo "<table>";
				echo"<tr><th>"."valor serviços"."</th>"."<th>"."valor Produto"."</th>"."<th>"."valor hospedagem"."</th>"."<th>"."="."</th>"."<th>"."Total"."</th></tr>";

				echo"<tr><td>"."$valorServico"."</td>"."<td>"."$valorProduto"."</td>"."<td>"."$valorQuarto"."</td>"."<td>"."="."</td>"."<td>"."$valorTotal"."</td></tr>";
				echo "</table>";
            ?>
            <BR><BR>
           <button class="btn waves-effect waves-light" type="submit">
           			<a href="../html/home.html">
                    <i class="material-icons">HOME</i>
           </button>
        </div>
        <br>
        <br>
    </body>
    <footer class="page-footer orange">
        <div class="footer-copyright">
            <div class="container">
                <div class="row center">
                    @copyright
                </div>
            </div>
        </div>
    </footer>
</html>


	
