<?php

class Cliente{


    public function cadastrar($nome, $cpf, $rg, $sexo, $endereco, $numero, $bairro, $cidade, $estado, $cep, $fixo, $celular){
        global $pdo;

        $array = array();

        $sql = "INSERT INTO cliente (nome, cpf, rg, sexo, endereco, numero, bairro, cidade, estado, cep, fixo, celular) VALUES (:nome, :cpf, :rg, :sexo, :endereco, :numero, :bairro, :cidade, :estado, :cep, :fixo, :celular)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome", $nome);
        $sql->bindValue("cpf", $cpf);
        $sql->bindValue("rg", $rg);
        $sql->bindValue("sexo", $sexo);
        $sql->bindValue("endereco", $endereco);
        $sql->bindValue("numero", $numero);
        $sql->bindValue("bairro", $bairro);
        $sql->bindValue("cidade", $cidade);
        $sql->bindValue("estado", $estado);
        $sql->bindValue("cep", $cep);
        $sql->bindValue("fixo", $fixo);
        $sql->bindValue("celular", $celular);
        $sql->execute();
        return true;
    }

    public function lista(){
        global $pdo;

        $array = array();

        $sql = "SELECT * FROM cliente";
        $sql = $pdo->prepare($sql);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }


}

?>