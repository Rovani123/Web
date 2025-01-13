<?php 
    function conecta(){
        $user="root";
        $senha="aluno";
        $database="mydb";
        $host="localhost";      
        
        $db = new PDO("mysql:host=$host;dbname=$database",$user,$senha);
        if($db){
            return $db;
        }else{
            return false;
        }
    }

    function chekConexao($connId){
        if($connId){
            echo "conectado com o banco de dados";
        }else{
            echo "não foi possivel conectar com o banco de dados";
        }
    }
?>