<!--SoliDeoGloria-->

<?php

    $servidor = "localhost";
    $usuario = "prepress_gruposoudolitoral";
    $senha = "@SouDoLitoral#!";
    $banco = "prepress_sou_do_litoral";


    try{
        $pdo = new PDO("mysql:host=$servidor;dbname=$banco", "$usuario", "$senha");
    } catch(PDOException $e) {
        die($e -> getMessage());
    }
    
?>