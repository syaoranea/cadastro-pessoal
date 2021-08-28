<?php

    require_once "conexao.php";
    require_once "usuarioclass.php";

    $u = new Usuario();

$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);

if($u->login($email, $senha) == true){
    if(isset($_SESSION['idUser'])){
        header("Location: index.php");
    }else{
        header("Location: ../html/login.html");
    }
}else{
    header("Location: ../html/login.html");
}



?>