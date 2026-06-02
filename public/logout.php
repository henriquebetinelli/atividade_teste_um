<!-- abertura da tag php -->
<?php
    // iniciar a sessão
    session_start();
    // destruir a sessão
    session_destroy();
    // redirecionar para a página de login
    header("Location: ../index.php");
    // encerrar a execução do script
    exit();
// fechamento da tag php
?>