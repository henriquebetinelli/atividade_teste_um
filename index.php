<?php

// iniciar sessão no servidor
session_start();

// incluir conexão com o banco
include("infra/db/connect.php");

// verificar se o método de requisição é POST
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // capturar dados do formulário
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // exibir os dados capturados no console do navegador
    echo "<script> console.log('usuario captado com sucesso $usuario') </script>";
    echo "<script> console.log('senha captado com sucesso $senha') </script>";

    // consultar o banco de dados
    $sql = "SELECT * FROM users WHERE username ='$usuario' AND password ='$senha'";

    // armazena o resultado da consulta
    $resultado = $conn -> query($sql);

    // verificar se a consulta retornou resultados
    if($resultado->num_rows > 0){
        // autenticar o usuário e redirecionar para a página inicial
        $_SESSION["usuario"] = $usuario;
        header("Location: public/home.php");
        exit();
    }else{
        // exibir mensagem de erro
        $erro = "Usuário ou senha inválidos.";
    }
}
?>

<!-- início do HTML -->
<html lang="en">

<!-- cabeçalho -->
<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- título da tela -->
    <title>Tela de Login</title>
    <!-- link para o CSS -->
    <link rel="stylesheet" href="styles/style.css">
</head>
<!-- corpo -->
<body>
    <!-- abrir tag php para usar componentes -->
    <?php
    // incluir o componente navbar
    include("public/components/navbar.php");
    // fechar tag php
    ?>
    <!-- título da tela -->
    <h1>Tela de Login - PHP</h1>
    <!-- abertura da tag de formulario  -->
    <form method="POST">
        <!-- parte de imput do usuario -->
        <label>Usuario</label>
        <input type="text" name="usuario"> <br>
        <!-- parte de imput da senha -->
        <label>Senha</label>
        <input type="password" name="senha"> <br>

        <!-- abertura da tag de php para mostrar erro -->
        <?php
        
        // verificar se a variável de erro existe
        if(isset($erro)){
            // exibir a mensagem de erro
            echo $erro;
        }
        
        // fechar tag php
        ?>
        <br>
        <!-- botao de enviar o formulario -->
        <button type="submit">Entrar</button>
    </form>
</body>
</html>