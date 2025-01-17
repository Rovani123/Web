<?php
    include_once("usuarioDAO.php");
    session_start();
    if($_SESSION['logado'] == false){
        header("location:login.php");
    }
    $titulo = $_REQUEST['tipo'];
    if($_REQUEST['tipo'] == "Editar"){
        $usuario = getUsuariobyid($_REQUEST['id']);
    }else{
        $usuario = array("nome"=>"","dataNasc"=>"","email"=>"","telefone"=>"");
    }
    if(!isset($_REQUEST['id'])){
        $_REQUEST['id'] = null;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <style>
        *{margin: 0px;}
        #cima{min-height:100vh; display:flex; justify-content: center; align-items:center;background-image: url("fundo.jpg");background-repeat:no-repeat; background-size:cover;}
        fieldset{display:flex; flex-direction: column; align-items:center;background-color:white; border: 2px solid black;}
        form{display:flex; flex-direction: column; align-items:center;}
        label{font: 20pt normal black; font-family: georgia;}
        input{font: 20pt normal black; font-family: georgia;}
        button{font: 20pt normal black; font-family: georgia; margin: 2px;}
        .div{min-width:100%; display:flex; justify-content:space-between; margin: 1px;}
    </style>
</head>
<body>
    <div id="cima">
        <fieldset>
            <form action="cadastroEdicaoControle.php" method="post">
                <div class="div">
                <label for="">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $usuario['nome'];?>">
                </div> 

                <div class="div">
                <label for="">Data de Nascimento</label>
                <input type="text" name="data" id="data" value="<?php echo $usuario['dataNasc'];?>"> 
                </div>

                <div class="div">
                <label for="">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $usuario['email'];?>">
                </div>

                <div class="div">
                <label for="">Telefone</label>
                <input type="number" name="telefone" id="telefone" value="<?php echo $usuario['telefone'];?>">
                </div>

                <input type="text" name="tipo" value="<?php echo $_REQUEST['tipo']?>" hidden>
                <input type="number" name="id" value="<?php echo $_REQUEST['id']?>" hidden>

                <input type="submit" value="Confirmar">
            </form>
            <a href="usuarios.php"><button>Cancelar</button></a>
        </fieldset>
    </div>
</body>
</html>