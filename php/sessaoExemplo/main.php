<?php

    session_start();

    if(!isset($_SESSION["login"])){
        exit();
    }

    if(isset($_GET["txt"])){
        $_SESSION["login"] = $_GET["txt"];
    }

    
    echo $_SESSION["login"];
    echo $_SESSION["txt"];

?>

<h2>Menu</h2>

<a href="sair.php"><p>Sair</p></a>