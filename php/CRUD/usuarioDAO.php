<?php 
    function conecta(){
        $user="root";
        $senha="aluno";
        $database="crudphp";
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
            echo "conectado";
        }else{
            echo "não foi possivel conectar";
        }
    }

    function save($nome,$dataNasc,$telefone,$email){
        $db = conecta();

        $sql = "insert into usuario (nome,dataNasc,telefone,email) values (?,?,?,?)";

        $stmt = $db ->prepare($sql);
        $stmt->bindValue(1,$nome);
        $stmt->bindValue(2,$dataNasc);
        $stmt->bindValue(3,$telefone);
        $stmt->bindValue(4,$email);
        $stmt->execute();
    }

    function update($nome,$dataNasc,$telefone,$email,$id){
        $db = conecta();

        $sql = "update usuario set nome=?,dataNasc=?,telefone=?,email=? where idusuario = ?";

        $stmt = $db ->prepare($sql);
        $stmt->bindValue(1,$nome);
        $stmt->bindValue(2,$dataNasc);
        $stmt->bindValue(3,$telefone);
        $stmt->bindValue(4,$email);
        $stmt->bindValue(5,$id);
        $stmt->execute();
    }

    function delete($id){
        $db = conecta();

        $sql = "delete from usuario where idusuario = ?";
        $stmt = $db ->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
    }

    function getUsuarios(){
        $db =conecta();
        $sql = "select * from usuario";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return $resultado;
    }

    function getUsuario($nome){
        $db =conecta();
        $sql = "select * from usuario where nome like '$nome%' ";
        $stmt = $db->prepare($sql);
        
        $stmt->execute();
        $resultado = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return $resultado;
    }

    function getUsuariobyid($id){
        $db =conecta();
        $sql = "select * from usuario where idusuario = ?";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }
?>