<?php

$idCliente = $_GET["idCliente"];
$sql = "SELECT * FROM tbcliente WHERE idCliente= {$idCliente}";

$rs = mysqli_query($conexao,$sql) or die ("Erro ao recuperar os dados do registro!" . mysqli_error($conexao));

$dados = mysqli_fetch_assoc($rs);
 
?>

<header>
    <h3><i class="bi bi-person-badge"></i> Editar cliente</h3>
</header>
<div class="row">
<div class="col-6">
<form action="index.php?menuop=atualizar-cliente" method="post">
    <div class="mb-3 col-4">
        <label class="form-label" for="idCliente">ID</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-dot"></i></i></span>
            <input class="form-control" type="int" name="idCliente" value="<?=$dados["idCliente"]?>" readonly>
        </div>
        
    </div>

    <div class="mb-3">
        <label class="form-label" for="nomeCliente">Nome</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person"></i></span>
            <input class="form-control" type="text" name="nomeCliente" value="<?=$dados["nomeCliente"]?>">
        </div>
        
    </div>

    <div class="mb-3">
        <label class="form-label" for="emailCliente">E-Mail</label>

        <div class="input-group">
        <span class="input-group-text">@</span>
        <input class="form-control" type="email" name="emailCliente" value="<?=$dados["emailCliente"]?>">
        </div>
        
    </div>

    <div class="mb-3">
        <label class="form-label" for="telefoneCliente">Telefone</label>

        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
            <input class="form-control" type="text" name="telefoneCliente" value="<?=$dados["telefoneCliente"]?>">
        </div>
        
    </div>

    <div class="mb-3">
        <label class="form-label" for="enderecoCliente">Endereço</label>

        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-mailbox2"></i></span>
            <input class="form-control" type="text" name="enderecoCliente" value="<?=$dados["enderecoCliente"]?>">
        </div>
        
    </div>

    <div class="row">
    <div class="mb-3 col-5">
        <label class="form-label" for="sexoCliente">Sexo</label>

        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-gender-trans"></i></span>
            <select class="form-control" name="sexoCliente" value="<?=$dados["sexoCliente"]?>" id="sexoCliente">
                <option <?php echo ($dados['sexoCliente']=='')?'selected':''; ?>>Selecione o sexo do cliente</option>
                <option <?php echo ($dados['sexoCliente']=='M')?'selected':'';?> value="M">Masculino</option>
                <option <?php echo ($dados['sexoCliente']=='F')?'selected':''; ?> value="F">Feminino</option>
                <option <?php echo ($dados['sexoCliente']=='O')?'selected':''; ?> value="O">Outros</option>
            </select>
        </div>
        
    </div>

    <div class="mb-3 col-5">
        <label class="form-label" for="dataNascCliente">Data de Nascimento</label>
        
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-calendar-event-fill"></i></span>
            <input class="form-control" type="date" name="dataNascCliente" value="<?=$dados["dataNascCliente"]?>">
        </div>
        
    </div>
    </div>
    

    <div class="mb-3">
        <input class="btn btn-warning" type="submit" value="Atualizar" name="btnAtualizar">
    </div>


</form>
</div>

<div class="col-6">
    <?php

        if($dados["nomeFotoCliente"]==""){
            $nomeFoto = "sem-foto.jpg";
        }else {
            $nomeFoto = $dados["nomeFotoCliente"];
        }

    ?>
    <img width="500" src="./paginas/contatos/fotos-clientes/<?=$nomeFoto?>" alt="Foto do contato">
</div>
</div>