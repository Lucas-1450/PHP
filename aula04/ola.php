<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css"/>
    <title>Primeiro Exemplo PHP</title>
    <style>
        h2 {
            color: red;
            text-shadow: 1px 1px 1px black;
        }
    </style>
</head>
<body>

<div>
    <h1>Testando PHP</h1>

    <?php
        $nome = "Lucas Melo Ponte Rodrigues";
        $sal = 1998.00;
        $fer = $sal + $sal/3;
        
        echo "Meu nome é $nome e vou receber R$$fer de férias";
    ?>
    
</div>
</body>
</html>