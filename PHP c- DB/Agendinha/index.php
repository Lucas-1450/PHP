<?php
include("db/conexao.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilopadrao.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    
    <title>Agendinha 1.0</title>
    
</head>
<body>
    <header class="bg-dark">
        <div class="container">
        

     
  
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="img/logo_agendador.png" alt="Agendinha" width="120">
            </a>
             
             
             
             
        

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active" id=""><a class="nav-link" href="index.php?menuop=home">Home</a></li>
                <li class="nav-item" id=""><a class="nav-link" href="index.php?menuop=contatos">Contatos</a></li>
                <li class="nav-item" id=""><a class="nav-link" href="index.php?menuop=tarefas">Tarefas</a></li>
                <li class="nav-item" id=""><a class="nav-link" href="index.php?menuop=eventos">Eventos</a></li>

            </ul>

        </div>
        </nav>
        </div>
    </header>


    <main>
    <div class="container">

   
    <?php
        $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"home";
        switch($menuop){
            case 'home':
                include("paginas/home/home.php");
                break;
            case 'contatos':
                include("paginas/contatos/contatos.php");
                break;
            case 'cad-cliente':
                include("paginas/contatos/cad-cliente.php");
                break;

            case 'inserir-cliente':
                include("paginas/contatos/inserir-cliente.php");
                break;


            case 'editar-cliente':
                include("paginas/contatos/editar-cliente.php");
                break;

            case 'atualizar-cliente':
                include("paginas/contatos/atualizar-cliente.php");
                break;

            case 'excluir-cliente':
                include("paginas/contatos/excluir-cliente.php");
                break;
            
                   
            case 'tarefas':
                include("paginas/tarefas/tarefas.php");
                break;
            case 'eventos':
                include("paginas/eventos/eventos.php");
                break;
            default:
                include("paginas/home/home.php");
                


        }
    ?>

    </div>
    </main>

    <footer class="container-fluid bg-dark">

        <div class="text-center">A-G-E-N-D-I-N-H-A</div>

    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="./js/validation.js"></script>
</body>
</html>