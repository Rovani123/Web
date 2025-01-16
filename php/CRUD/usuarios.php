<?php
        include_once("usuarioDAO.php");
        session_start();
        if($_SESSION['logado'] == false){
            header("location:login.php");
        }
        if(isset($_REQUEST['pesquisa'])){
            $pesquisa = $_REQUEST['pesquisa'];
            $usuarios = getUsuario($pesquisa);
        }else{
            $usuarios = getUsuarios();
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <style>
        *{margin: 0px; border-collapse:collapse;}
        #cima{min-height:20vh; display:flex; justify-content: center; align-items:center;}
        #baixo{min-height:80vh; display:flex; justify-content: center; align-items:center;}
        fieldset{display:flex; }
        th{border: 1px solid black; font: 20pt normal black; font-family: georgia; padding:1px;}
        .borda{border: 1px solid black; font: 20pt normal black; font-family: georgia; padding:1px;}
        input{font: 20pt normal black; font-family: georgia;}
        button{font: 20pt normal black; font-family: georgia;}
        #btExcluir{color:red;}
        /*#deslogar{justify-self:start;align-self:start;}*/
    </style>
</head>
<body>
    <div id="cima">
        <a href="sair.php" id="deslogar"><button id="deslogar">Deslogar</button></a>
        <fieldset>
            <form action="cadastroEdicao.php" method="post">
                 <input type="text" name="tipo" value="Cadastrar" hidden>
                 <input type="submit" value="Cadastrar">
            </form>
            <form action="usuarios.php" method="get">
                <input type="text" name="pesquisa" id="pesquisa">
                <input type="submit" value="Pesquisar">
            </form>
        </fieldset>
    </div>
    <div id="baixo">
        <fieldset>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
                <?php 
                    for($i=0;$i<count($usuarios);$i++){
                ?>
                        <tr>
                            <td class="borda"><?php echo $usuarios[$i]['idusuario'];?></td>
                            <td class="borda"><?php echo $usuarios[$i]['nome'];?></td>
                            <td class="borda"><?php echo $usuarios[$i]['dataNasc'];?></td>
                            <td class="borda"><?php echo $usuarios[$i]['email'];?></td>
                            <td class="borda"><?php echo $usuarios[$i]['telefone'];?></td>
                            <td><form action="cadastroEdicao.php" method="post">
                                <input type="text" name="tipo" value="Editar" hidden>
                                <input type="number" name="id" value="<?php echo $usuarios[$i]['idusuario'];?>" hidden>
                                <input type="submit" value="Editar">
                            </form></td>
                            <td><form action="usuariosControle.php" method="post">
                                <input type="number" name="id" value="<?php echo $usuarios[$i]['idusuario'];?>" hidden>
                                <input type="submit" value="Excluir" id="btExcluir">
                            </form></td>
                        </tr>
                <?php
                    }
                ?>
            </table>
        </fieldset>
    </div>
</body>
</html>