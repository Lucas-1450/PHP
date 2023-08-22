<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form action="exercicio02.php" method="get">
        <select name="num" id="">
            <?php
                for($c = 1; $c <= 10; $c ++){
                    echo "<option>$c</option>";
                }
            ?>
        </select>
        <input type="submit" value="Calcular">
    </form>
</div>
</body>
</html>
 