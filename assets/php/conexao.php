<?php

session_start();

 $localhost = "localhost";
 $user = "u242587662_edu";
 $passw ="eduKv@123";
 $banco = "u242587662_itautech";

 global $pdo;
 
 try{
 $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 }catch(PDOException $e){
     echo "Erro: ".$e->getMessage();
     exit;
 }
?>