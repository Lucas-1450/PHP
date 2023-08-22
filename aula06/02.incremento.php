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
        /** OPERADORES DE INCREMENTO
         * 
         * Pré-incremento: $a = $a + 1 --> ++$a
         * Pós-incremento: $a = $a + 1 --> $a++
         * Pré-decremento: $a = $a - 1 --> --$a
         * Pós-decremento: $a = $a - 1 --> $a--
         */
        $atual = $_GET["aa"];
        echo "O ano atual é $atual e o ano anterior foi ". --$atual; /**Pré decremento tira da variável pra depois mostrar */

        $senha = $_GET["s"];
        echo "<br>De 10 chances essa é a sua". $senha--; /** pós decremento mostra a variável e depois tira */
        echo "<br> Agora você tem $senha chances";
        

       


    ?>
</div>
</body>
</html>