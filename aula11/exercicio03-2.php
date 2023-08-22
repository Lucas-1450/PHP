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
        $i = isset($_GET["ini"])?$_GET["ini"]:0;
        $f = isset($_GET["fin"])?$_GET["fin"]:0;
        $c = isset($_GET["c"])?$_GET["c"]:1;
        
        while ($i <= $f){
            echo $i."<br>";
            $i += $c;
        }

        while ($i >= $f){
            echo $i."<br>";
            $i -= $c;
        }
    ?>
    <br> <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>