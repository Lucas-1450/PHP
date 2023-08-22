<header>

<h3><i class="bi bi-person-square"></i> Clientes  </h3>

</header>

<div>
    <a class="btn btn-outline-secondary mb-2" href="index.php?menuop=cad-cliente"><i class="bi bi-person-plus"></i> Novo Cliente</a>
</div>

<div class="pesquisa">
    <form action="index.php?menuop=contatos" method="post">

        <div class="input-group">
            <input class="form-control" type="text" name="txt_pesquisa" placeholder="ID / Nome">

            <button class="btn btn-outline-success btn-sm" type="submit"><i class="bi bi-search"></i> Pesquisar</button>

        </div>
    </form>
</div>
<div class="tabela">
<table class="table table-dark table-striped table-bordered table-sm">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Sexo</th>
            <th>Data de nascimento</th>
            <th>Editar</th>
            <th>Excluir</th>
            
        </tr>
    </thead>

    <tbody>
        <?php

        $quantidade = 10;

        $pagina = (isset($_GET['pagina']))?(int)$_GET['pagina']:1;

        $inicio = ($quantidade * $pagina) - $quantidade; //(10 * 2) - 10 = 10 --> a página 2 inicia no vetor 10






        $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";

        $sql = "SELECT idCliente,
        upper(nomeCliente) AS nomeCliente,
        lower(emailCliente) AS emailCliente,
        telefoneCliente,
        upper(enderecoCliente) AS enderecoCliente,
        CASE
            WHEN sexoCliente='M' THEN 'Masculino'
            WHEN sexoCliente='F' THEN 'Feminino'
        ELSE
            'Não especificado'
        END AS sexoCliente,
        date_format(dataNascCliente, '%d/%m/%Y') AS dataNascCliente
        FROM tbcliente 
        WHERE 
        idCliente='{$txt_pesquisa}' or
        nomeCliente LIKE '%{$txt_pesquisa}%'
        ORDER BY nomeCliente ASC
        LIMIT $inicio, $quantidade
        ";
        $rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conexao));
        while($dados = mysqli_fetch_assoc($rs)){

        
        ?>
        <tr>
            <td><?=$dados["idCliente"]?></td>
            <td class="text-nowrap"><?=$dados["nomeCliente"]?></td>
            <td class="text-nowrap"><?=$dados["emailCliente"]?></td>
            <td class="text-nowrap"><?=$dados["telefoneCliente"]?></td>
            <td class="text-nowrap"><?=$dados["enderecoCliente"]?></td>
            <td><?=$dados["sexoCliente"]?></td>
            <td><?=$dados["dataNascCliente"]?></td>
            <td class="text-center"><a class="btn btn-outline-warning btn-sm-outline" href="index.php?menuop=editar-cliente&idCliente=<?=$dados["idCliente"]?>"><i class="bi bi-pencil-square"></i></a></td>
            <td class="text-center"><a  class="btn btn-outline-danger btn-sm-outline" href="index.php?menuop=excluir-cliente&idCliente=<?=$dados["idCliente"]?>"><i class="bi bi-trash-fill"></i></a></td>
            
        </tr>
        <?php
        }
        ?>
    </tbody>

</table>
</div>

<ul class="pagination justify-content-center">
<?php

$sqlTotal = "SELECT idCliente FROM tbcliente";
$qrTotal = mysqli_query($conexao, $sqlTotal) or die (mysqli_error($conexao));
$numTotal = mysqli_num_rows($qrTotal);
$totalPagina = ceil($numTotal/$quantidade); //ceil arredonda pra cima
echo "<li class='page-item'><span class='page-link'>Total de Registros: $numTotal </span></li>";

echo "<li class='page-item'><a class='page-link' href=\"?menuop=contatos&pagina=1\">Primeira pagina</a></li>";

if($pagina>1){
    ?>
    <li class="page-item"><a class="page-link"href="?menuop=contatos&pagina=<?php echo $pagina-1?>">  <<  </a></li>
    <?php
}


for ($i=1;$i<=$totalPagina;$i++){

    if($i>=($pagina-5) && $i <=($pagina+5)){
        if($i == $pagina){
            echo "<li class='page-item active'><span class='page-link' href='#'>$i</span></li>";
        }else{
            echo "<li class='page-item'><a class='page-link' href=\"?menuop=contatos&pagina=$i\">$i</a></li> ";
        }
    }
}

if($pagina<($totalPagina)){
    ?>
    <li class="page-item"> <a class="page-link" href="?menuop=contatos&pagina=<?php echo $pagina+1?>">  >>  </a></li>
    <?php
}

echo "<li class='page-item'><a class='page-link' href=\"?menuop=contatos&pagina=$totalPagina\">Ultima pagina</a></li>";

?>
</ul>