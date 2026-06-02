<!-- abertura da tag php -->
<?php
    // iniciar a sessão 
    session_start();
    // verificar se o usuário não está autenticado
    if(!isset($_SESSION["usuario"])){
        // redirecionar para a página de login
        header("Location: ../index.php");
        // encerrar a execução do script
        exit();
    }

    // incluir o arquivo de conexão com o banco de dados
    include("../infra/db/connect.php");

    // verificar se o método de requisição é POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // capturar o usuário do formulário
        $novoUsuario = $_POST["usuario"];
        // capturar a senha do formulário
        $novaSenha = $_POST["senha"];

        // definir a consulta SQL para inserir um novo usuário no banco de dados
        $sql = "INSERT INTO users(username, password) VALUES ('$novoUsuario','$novaSenha')";

        // executar a consulta e verificar se foi bem sucedida
        if($conn->query($sql) === TRUE){
            // exibir mensagem de sucesso
            echo "<script> alert('Usuário Cadastrado com Sucesso!');</script>";
        }else{
            // exibir mensagem de erro
            echo "<script> alert('Erro: Usuário Não Cadastrado!');</script>";  
        }

    }
// fechamento da tag php
?>
<!-- início do html -->
<html lang="en">
<!-- cabeçalho -->
<head>
    <!-- titulo da página -->
    <title>Home</title>
    <!-- link para o arquivo de estilo -->
    <link rel="stylesheet" href="../styles/style.css">
<!-- fechamento da tag de cabeçalho -->
</head>
<!-- abertura da tag de corpo -->
<body>
    <!-- abertura da tag php para inserir a navbar -->
    <?php
    // incluir o componente navbar
    include("components/navbar.php");
    // fechar a tag php
    ?>

    <!-- mensagem de boas vinda com o nome do usuário  cadastrado -->
    <h1>Bem vindo, <?php echo $_SESSION["usuario"]; ?> </h1>

    <!-- botao para dar o logout -->
    <a href="logout.php">Sair</a>

    <!-- linha horizontal -->
    <hr>
    <!-- titulo do formulário de cadastro de novos usuarios -->
    <h3>Cadastrar Novos Usuários</h3>
    <!-- abertura da tag de formulário -->
    <form method="POST">
        <!-- campo para o nome de usuário -->
        <label>Usuario</label>
        <input type="text" name="usuario"> <br>
        <!-- campo para a senha do usuário -->
        <label>Senha</label>
        <input type="password" name="senha"> <br>
        <!-- tag de pular linha -->
        <br>
        <!-- botão para cadastrar o usuário -->
        <button type="submit">cadastrar</button>
    </form>

    <!-- linha horizontal -->
    <hr>

    <!-- abertura da tag php para incluir a tabela de usuários -->
    <?php
    // incluir o componente da tabela de usuários cadastrados
    include("components/table.php");
    // fechar a tag php
    ?>
    
</body>
</html>