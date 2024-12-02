<?php 
    include_once("database.php");
    
    function save($nome,$email){
        $db = conecta();

        $sql = "insert into usuario (nome,email) values (?,?)";

        $stmt = $db ->prepare($sql);
        $stmt->bindParam(0,$nome);
        $stmt->bindParam(1,$email);
        $stmt->execute();
        $stmt->close();
    }
?>