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
        /*OPERADOERES RELACIONAIS
        MAIOR  --->          >
        MENOR  --->          <
        MAIOR/IGUAL  --->    >= 
        MENOR/IGUAL  --->    <=
        DIFERENTE    --->    <> OU !=
        IGUAL        --->    ==
        IDENTICO     --->    ===                 OPERADOR TERNÁRIO:  (EXPRESSÃO) ? (VERDADEIRO) : (FALSO)     */

                                                         //  Exemplo:   $maior = $a > $b ? $a : $b

        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2 <br>";

        $r = ($tipo == "s")?$n1+$n2:$n1*$n2;

        echo "O resultado é $r";

    ?>
</div>
</body>
</html>
 