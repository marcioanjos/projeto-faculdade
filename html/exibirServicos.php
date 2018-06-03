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
            <?php
               include'../php/exibirServicos.php';
            ?>    

            <br><br><br><br><br>
            <form action="../php/deleteServico.php" method="POST">
                <a>ID</a>
                <input placeholder="Digite o id para excluir"  type="text" name="id">
                <button class="btn waves-effect waves-light" type="submit">
                    <i class="material-icons">delete</i>
                </button>
            </form>
        </div>
        <br>
        <br>
    
        <footer class="page-footer orange">
            <div class="container">
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row center">
                        @copyright
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
