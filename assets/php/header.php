<?php

require_once 'verifica.php';
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="../css/painel.css">
</head>
<body>
    <header>
        <nav id="painel">
            <a href="" class="logo">Painel<br/>Administrativo</a>
            <div class="mobile-menu">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
            </div>
          <ul class="nav-list">
            <li><a href="index.php">Início</a></li>
            <li><a href="index.php">Usuarios</a></li>
            <li><a href="clientes.php">Clientes</a></li>
            <li><a href="logout.php">Sair</a><br/></li>
          </ul>
        </nav>