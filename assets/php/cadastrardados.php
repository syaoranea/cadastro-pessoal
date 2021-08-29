<?php

require_once 'conexao.php';
require_once 'clienteclass.php';

if(isset($_POST['bt-cadastrar'])){
    $c = new Cliente();
    
    $nome = addslashes($_POST['nome']);
    $cpf = addslashes($_POST['cpf']);
    $rg = addslashes($_POST['rg']);
    $sexo = addslashes($_POST['sexo']);
    $endereco = addslashes($_POST['logradouro']);
    $numero = addslashes($_POST['numero']);
    $bairro = addslashes($_POST['bairro']);
    $cidade = addslashes($_POST['localidade']);
    $estado = addslashes($_POST['uf']);
    $cep = addslashes($_POST['cep']);
    $fixo = addslashes($_POST['fixo']);
    $celular = addslashes($_POST['celular']);

    try{
    if($c->cadastrar($nome, $cpf, $rg, $sexo, $endereco, $numero, $bairro, $cidade, $estado, $cep, $fixo, $celular) == true){

        header("Location: ../../sucesso.html");
    }
    }catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
    }


}