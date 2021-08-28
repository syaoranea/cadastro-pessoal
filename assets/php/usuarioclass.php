<?php

class Usuario{

    public function login($email, $senha){
        global $pdo;

        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

           $_SESSION['idUser'] = $dado['idusuario'];
            echo $dado['idusuario'];
            
        return true;
            
   }else{
    echo $dado['nome'];
            return false;
        }
    }

    public function logged($id){
        global $pdo;

        $array = array();

        $sql = "SELECT * FROM usuarios WHERE idusuario = :idusuario";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("idusuario", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function cadastrar($nome, $email, $senha, $perfil){
        global $pdo;

        $array = array();

        $sql = "INSERT INTO usuarios (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome", $nome);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->bindValue("perfil", $perfil);
        $sql->execute();
        return true;
    }

    public function lista(){
        global $pdo;

        $array = array();

        $sql = "SELECT * FROM usuarios";
        $sql = $pdo->prepare($sql);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function editar($id, $nome, $email, $senha, $perfil){
        global $pdo;

        $sql = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha, perfil = :perfil  WHERE idusuario = :idusuario";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("idusuario", $id);
        $sql->bindValue("nome", $nome);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->bindValue("perfil", $perfil);
        $sql->execute();
        return TRUE;

    }

    public function remover($id){
        global $pdo;

        $sql = "DELETE FROM usuarios WHERE idusuario = :idusuario";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("idusuario", $id);
        $sql->execute();
        return TRUE;
    }
}

?>