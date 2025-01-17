<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{margin: 0px;}
        body{display: flex;align-items: center; justify-content: center; min-height: 100vh;flex-direction: column; background-image: url("fundo.jpg");background-repeat:no-repeat; background-size:cover;}
        fieldset{display: flex;align-items: center; justify-content: center;flex-direction: column; background-color:white; border: 2px solid black;}
        form{display: flex;align-items: center; justify-content: center;flex-direction: column; }
        label{font: 20pt normal black; margin-top: 4%; font-family: georgia;}
        input{font: 20pt normal black; margin-top: 4%; font-family: georgia;}
        p{font: 20pt bold red; margin-top: 2%; font-family: georgia; color:red;}
    </style>
</head>
<body>
    <fieldset>        
        <form action="loginControle.php" method="post">
            <label for="usuario">Insira seu usuário: </label>
            <input type="text" name="usuario" id="usuario">
            <label for="senha">Insira sua senha: </label>
            <input type="password" name="senha" id="senha">
            <input type="submit" value="Login">
        </form>
    </fieldset>

    <?php
    session_start();
    if(isset($_SESSION['logado'])){
        if($_SESSION['logado'] == true){
            header("location:usuarios.php");
        }
    }
    if(isset($_REQUEST['login'])){
        if($_REQUEST['login'] == 0){
            echo "<p> Usuario ou senha Inválidos</p>";
        }
    }
    ?>
</body>
</html>