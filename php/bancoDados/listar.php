<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listar</title>
</head>
<body>
    <pre>
    <?php
    include_once("database.php");
    include_once("pessoaDAO.php");
    $resul = getUsuarios();
    for($i =0; $i < $resul.ob_get_length; $i++){
        echo "A";
    }
    
    ?>
    </pre>
</body>
</html>