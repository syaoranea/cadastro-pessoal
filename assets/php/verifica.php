<?php
require_once 'conexao.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])) {
    require_once 'usuarioclass.php';
    $u = new Usuario();

    $logado = $u->logged($_SESSION['idUser']);
    $nome = $logado['nome'];
    
}else{
    header("Location: login.html");

}

?>