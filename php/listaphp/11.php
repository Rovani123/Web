<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11</title>
</head>
<body>
    <form action="" method="get">
        <label for="lado1">Insira o primeiro lado do triangulo: </label>
        <input type="number" name="lado1" id="lado1"> <br>
        <label for="lado2">Insira o segundo lado do triangulo: </label>
        <input type="number" name="lado2" id="lado2"> <br>
        <label for="lado3">Insira o terceiro lado do triangulo: </label>
        <input type="number" name="lado3" id="lado3"> <br>
        <input type="submit" value="OK">
    </form>
    <?php
    $lado1 = intval($_REQUEST["lado1"]);
    $lado2 = intval($_REQUEST["lado2"]);
    $lado3 = intval($_REQUEST["lado3"]);

    if($lado1+$lado2 < $lado3 || $lado1+$lado3 < $lado2 || $lado3+$lado2 < $lado1){
        echo "Não é um triangulo";
    }else{
        if($lado1 == $lado2 && $lado3 == $lado2){
            echo "É um triangulo Equilátero";
        }else if($lado1 == $lado2 || $lado3 == $lado2 || $lado3 == $lado1){
            echo "É um triangulo Isósceles";
        }else{
            echo "É um triangulo Escaleno";
        }
    }
    ?>
</body>
</html>