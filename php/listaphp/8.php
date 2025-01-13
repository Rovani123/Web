<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8</title>
</head>
<body>
    <form action="" method="get">
        <label for="string">Insira um texto: </label>
        <input type="text" name="string" id="string">
        <input type="submit" value="OK">
    </form>

    <?php
    $string = $_REQUEST["string"];
    echo "Tamanho: " . strlen($string) . "<br>";
    
    $string = strtolower(str_replace(' ', '', $string));
    $reverso = strrev($string); 
    if ($string == $reverso) { 
        echo "é palindromo <br>"; 
    } else { 
        echo "não é palindromo <br>";
    }
    $consoante =0;
    $vogal =0;
    for($i =0; $i < strlen($string); $i++){
        if(strtolower($string[$i]) == "a" || strtolower($string[$i]) == "e" || strtolower($string[$i]) == "i" ||  strtolower($string[$i]) == "o" || strtolower($string[$i]) == "u"){
            $vogal++;
        }else{
            $consoante++;
        }
    }
    echo "vogais: " . $vogal . "<br>" . "consoantes: " . $consoante;
    ?>

</body>
</html>