<?php 
    include_once("database.php");
    
    function save($nome,$email){
        $db = conecta();

        $sql = "insert into usuario (nome,email) values (?,?)";

        $stmt = $db ->prepare($sql);
        $stmt->bindValue(1,$nome);
        $stmt->bindValue(2,$email);
        $stmt->execute();
    }
?>