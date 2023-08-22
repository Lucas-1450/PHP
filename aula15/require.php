<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        require "funcoes.php"; //REQUIRE                 | require_once (carregar apenas uma vez)
        echo "<h1>Testando novas funções</h1>";
        ola();
        mostrarvalor(5465);
        echo "<h2>Finalizando programa.</h2>";
    ?>
</div>
</body>
</html>