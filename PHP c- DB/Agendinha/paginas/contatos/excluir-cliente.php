<header>
    <h3>Excluir Contato</h3>
</header>

<?php

$idCliente = mysqli_real_escape_string($conexao,$_GET["idCliente"]);
$sql = "DELETE FROM tbcliente WHERE idCliente = '{$idCliente}'";

mysqli_query($conexao, $sql) or die("Erro ao excluir o registro!" . mysqli_error($conexao));

echo "Registro excluído com sucesso!";

?>