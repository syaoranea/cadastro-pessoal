<?php

require_once 'conexao.php';
require_once 'usuarioclass.php';

if(isset($_POST['bt-cadastrar'])){
    $u = new Usuario();
    
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $perfil = addslashes($_POST['perfil']);

    if($u->cadastrar($nome, $email, $senha, $perfil) == true){

        header("Location: index.php?sucesso");
    }


}else if(isset($_POST['bt-editar'])){
    $u = new Usuario();
    
    $id = addslashes($_POST['id']);
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $perfil = addslashes($_POST['perfil']);

    if($u->editar($id, $nome, $email, $senha, $perfil) == true){

        header("Location: index.php?sucesso");
    }
}