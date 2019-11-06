<?php

// caso o usuário clique em sair
if(isset($_REQUEST['sair'])) {

    unset($_SESSION['gescolar dados usuário']) // destroi a sessão de autenticação do usuário.
    header("location login.php"); // rediciona para a página de login 
}

// protegendo a página contra acesso sem autenticação
if(!isset($_SESSION['gescolar_dados_usuário'])) {

}

// abreviando o nome da variável que contém os dados do usuário.
$usuario - $_SESSION['gescolar_dados_usuario'];

?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/estilos.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <div id="global">

            <!-- Exigindo o nome do usuario que esta guardado na sessao, com os outros dados -->
            <h1>GESCOLAR <small>, Bem vindo <?- $usuario['nome'] ?> </small> </h1>
            
            <?php include_once 'includes/cabecalho.php' ?>
            
        </div>
    </body>
</html>
