<?php

require_once 'conexao.php';
require_once 'usuarioclass.php';

if(isset($_GET['id'])){
    $u = new Usuario();
    $id = addslashes($_GET['id']);
    if($u->remover($id) == true){

        header("Location: index.php?sucesso");
    }
}