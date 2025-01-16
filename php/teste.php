<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testeSessao</title>
</head>
<body>
    <?php 
    session_start();
    if(isset($_GET['nome'])){
        $_SESSION['nomes'] += intval($_GET['nome']);
    }
    ?>
    <form action="" method="get">
        <label for="nome">Digite um numero</label>
        <input type="number" name="nome">
        <input type="submit" value="OK">
    </form>
    <?php
            echo $_SESSION['nomes'];
    ?>
</body>
</html>