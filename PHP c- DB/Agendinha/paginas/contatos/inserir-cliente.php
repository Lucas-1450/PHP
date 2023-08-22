<header>
    <h3>Inserir Contatos</h3>
</header>
<?php

    $nomeCliente = mysqli_real_escape_string($conexao, $_POST["nomeCliente"]);
    $emailCliente = mysqli_real_escape_string($conexao, $_POST["emailCliente"]);
    $telefoneCliente = mysqli_real_escape_string($conexao, $_POST["telefoneCliente"]);
    $enderecoCliente = mysqli_real_escape_string($conexao, $_POST["enderecoCliente"]);
    $sexoCliente = mysqli_real_escape_string($conexao, $_POST["sexoCliente"]);
    $dataNascCliente = mysqli_real_escape_string($conexao, $_POST["dataNascCliente"]);
    $sql = "INSERT INTO tbcliente (
        nomeCliente,
        emailCliente,
        telefoneCliente,
        enderecoCliente,
        sexoCliente,
        dataNascCliente)
        VALUES (
            '{$nomeCliente}',
            '{$emailCliente}',
            '{$telefoneCliente}',
            '{$enderecoCliente}',
            '{$sexoCliente}',
            '{$dataNascCliente}'

        )
        ";

        mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conexao));

        echo "O registro foi inserido com sucesso!";

?>