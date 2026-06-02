<!-- titulo da tabela de usuarios cadastrados -->
<h3>Usuários Cadastrados</h3>

<!-- inicio da tag da tabela -->
<table border="1" cellpadding="3">

    <!-- cabeçalho da tabela -->
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Senha</th>
    </tr>

    <!-- abertura de tag php para consulta de usuários -->
    <?php
    
    // definir a consulta SQL para selecionar todos os usuários
    $sqlUsuarios = "SELECT * FROM users";
    // executar a consulta e armazenar o resultado 
    $resultadoUsuarios = $conn->query($sqlUsuarios);
    
    // executar um loop para percorrer os resultados da consulta e exibir os dados dos usuários na tabela
    while($linha = $resultadoUsuarios->fetch_assoc()){

        // exibir os dados do usuário
        echo "
        // abertura da linha da tabela
        <tr>
            // adição da cedula do id do usuário
            <td>" . $linha["id"]."</td>
            // adição da cedula do nome do usuário
            <td>" . $linha["username"]."</td>
            // adição da cedula do senha do usuário
            <td>" . $linha["password"]."</td>
        </tr>
        ";

    }
    // fechamento da tag php
    ?>

</table>