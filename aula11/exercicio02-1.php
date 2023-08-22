<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form action="exercicio02-2.php">
        <?php
            $c = 1;
            while($c <= 5){
                echo "Nota $c: <input type='number' name='v$c' max='100' min='0' value='0'><br>";
                $c++;
            }
        ?>
        <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>
 