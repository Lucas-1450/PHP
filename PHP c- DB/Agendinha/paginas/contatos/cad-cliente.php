<header>
    <h3><i class="bi bi-person-badge"></i> Cadastro de cliente</h3>
</header>
<div>
<form action="index.php?menuop=inserir-cliente" method="post" class="needs-validation" novalidate>
    <div class="mb-3">
        <label class="form-label" for="nomeCliente">Nome</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person"></i></span>
            <input class="form-control" type="text" name="nomeCliente" required>
            <div class="valid-feedback">Ok!</div>
            <div class="invalid-feedback">Campo obrigatório com no máximo 250 caracteres.</div>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label" for="emailCliente">E-Mail</label>
        <div class="input-group">
            <span class="input-group-text">@</span>
            <input class="form-control" type="email" name="emailCliente"  required>
            <div class="valid-feedback">Ok!</div>
            <div class="invalid-feedback">Campo obrigatório com no máximo 200 caracteres.</div>
        </div>

    </div>

    <div class="mb-3">
        <label class="form-label" for="telefoneCliente">Telefone</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
            <input class="form-control" type="text" name="telefoneCliente"  required>
            <div class="valid-feedback">Ok!</div>
            <div class="invalid-feedback">Campo obrigatório!.</div>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label" for="enderecoCliente">Endereço</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-mailbox2"></i></span>
            <input class="form-control" type="text" name="enderecoCliente" required>
            <div class="valid-feedback">Ok!</div>
            <div class="invalid-feedback">Campo obrigatório com no máximo 250 caracteres.</div>
        </div>
    </div>

    <div class="row">
    <div class="mb-3 col-5">
        <label class="form-label" for="sexoCliente">Sexo</label>

        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-gender-trans"></i></span>
            <select class="form-control" name="sexoCliente" id="sexoCliente" required>
                <option value="" selected >Selecione o sexo do cliente</option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>

        </select>
        <div class="valid-feedback">Ok!</div>
            <div class="invalid-feedback">Campo obrigatório!</div>
        </div>

    </div>

    <div class="mb-3 col-5">
        <label class="form-label" for="dataNascCliente">Data de Nascimento</label>

        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-calendar-event-fill"></i></span>
            <input class="form-control" type="date" name="dataNascCliente" required>
            <div class="valid-feedback">Ok!</div>
            <div class="invalid-feedback">Campo obrigatório !</div>
        </div>
    </div>
    </div>
    

    <div class="mb-3">
        <input class="btn btn-success" type="submit" value="Adicionar" name="btnAdicionar">
    </div>


</form>
</div>