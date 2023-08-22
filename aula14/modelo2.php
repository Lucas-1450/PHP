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

   
        function soma (){
          $p = func_get_args(); //---> pega todos is parâmetros passados na chamada colocando-os em um vetor e atribui as variáveis $p, $p1, $p2, $p3... $pn
          $tot = func_num_args();// ---> informa a quantidade de parâmetros passados
          $s = 0;
          for ($i = 0; $i < $tot; $i++){
            $s += $p[$i];
          }
          return $s;
        }

        $res = soma (3, 4);
        echo "A soma dos valores é $res.";
    ?>
</div>
</body>
</html>
 