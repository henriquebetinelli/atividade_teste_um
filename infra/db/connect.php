<!-- início do php para conectar com o banco -->
<?php
    // definir as variáveis de conexão com o banco de dados
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples";

    // criar a conexão com o banco de dados usando mysqli
    $conn = new mysqli($host,$user,$pass,$db);

    // verificar a conexão 
    if ($conn->connect_error){
        // exibir mensagem de erro no console do navegador
        echo "<script> console.log('erro na conexão com o banco') </script>";
    }else{
        // exibir mensagem de sucesso no console do navegador
        echo "<script> console.log('conexão com o banco foi um sucesso')</script>";
    }

?>