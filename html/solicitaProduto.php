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
    </head>

    <body>
        <!--Menu Principal-->
        <div id="menuContentHtml"></div>
        <div class="container">
            <h2 class="header center orange-text">Solicita Produtos</h2>
           
            <form action="../php/consumoProduto.php" method="POST"> 
                
                
                <a>CPF</a>
                <input placeholder="Digite seu cpf para solicita o produto desejado"  type="text" name="cpf">
                
                <?php
                echo "<h1>Produtos Disponiveis</h1  >";
                    include'../php/exibirProduto.php';
                ?> 
                <a>ID</a>
                <input placeholder="digite o id do produto desejado"  type="text" name="produto">
                
                <a>Quantidade</a>
                <input placeholder="Quantos itens deseja" type="text" name="qtd">
               
                <button class="btn waves-effect waves-light" type="submit" value="salvar">Salvar</button>
                 
            </form>
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
