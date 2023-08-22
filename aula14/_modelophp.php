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


        function soma ($n1, $n2){
          $s = $n1 + $n2;
          return $s;
        }

        /*OU:
        function soma ($n1, $n2){
          return $n1 + $n2;
           */

        $x = 4;
        $y = 8;
        $r = soma($x, $y);
        echo "A soma entre $x e $y é igual a $r!";

        /*
        function soma (){
          $p = func_get_args(); ---> pega todos is parâmetros passados na chamada colocando-os em um vetor e atribui as variáveis $p, $p1, $p2, $p3... $pn
          $tot = func_num_args(); ---> informa a quantidade de parâmetros passados
          $s = 0;
          for ($i = 0; $i < $tot; $i++){
            $s= $s + $p[$i];
          }
          return $s
        }

        $res = soma (3, 4, 8, 1, 2);
         */
    ?>
</div>
</body>
</html>
 