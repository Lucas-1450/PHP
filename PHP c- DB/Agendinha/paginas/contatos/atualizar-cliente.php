<header>
    <h3>Atualizar Contatos</h3>
</header>
<?php
    $idCliente = mysqli_real_escape_string($conexao, $_POST["idCliente"]);
    $nomeCliente = mysqli_real_escape_string($conexao, $_POST["nomeCliente"]);
    $emailCliente = mysqli_real_escape_string($conexao, $_POST["emailCliente"]);
    $telefoneCliente = mysqli_real_escape_string($conexao, $_POST["telefoneCliente"]);
    $enderecoCliente = mysqli_real_escape_string($conexao, $_POST["enderecoCliente"]);
    $sexoCliente = mysqli_real_escape_string($conexao, $_POST["sexoCliente"]);
    $dataNascCliente = mysqli_real_escape_string($conexao, $_POST["dataNascCliente"]);
    $sql = "UPDATE tbcliente SET
    nomeCliente = '{$nomeCliente}',
    emailCliente = '{$emailCliente}',
    telefoneCliente = '{$telefoneCliente}',
    enderecoCliente = '{$enderecoCliente}',
    sexoCliente = '{$sexoCliente}',
    dataNascCliente = '{$dataNascCliente}'
    WHERE idCliente = '{$idCliente}'
    ";

        mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conexao));

        echo "O registro foi atualizado com sucesso!";

?>