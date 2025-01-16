<?php
    include_once("usuarioDAO.php");
    session_start();
    if($_SESSION['logado'] == false){
        header("location:login.php");
    }
    if(isset($_REQUEST['tipo'])){
        if($_REQUEST['tipo'] == "Cadastrar"){
            $nome= $_REQUEST['nome'];
            $dataNasc= $_REQUEST['data'];
            $email= $_REQUEST['email'];
            $telefone= $_REQUEST['telefone'];
            save($nome,$dataNasc,$telefone,$email);
            header("location:usuarios.php");
        }else if($_REQUEST['tipo'] == "Editar"){
            $id= $_REQUEST['id'];
            $nome= $_REQUEST['nome'];
            $dataNasc= $_REQUEST['data'];
            $email= $_REQUEST['email'];
            $telefone= $_REQUEST['telefone'];
            update($nome,$dataNasc,$telefone,$email,$id);
            header("location:usuarios.php");
        }
    }
?>