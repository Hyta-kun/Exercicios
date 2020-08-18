<?php
    $sgbd = "mysql";
    $local = "localhost";
    $nome_bd = "loja";
    $usuario = "root";
    $senha = "usbw";
    $conexao = new PDO("$sgbd:host=$local;dbname=$nome_bd",$usuario,$senha);
?>