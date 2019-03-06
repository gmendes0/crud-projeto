<?php

    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $dbname = 'aula1';

    $conn = mysqli_connect($host, $user, $senha, $dbname) or die('Falha de conexão com o Banco de Dados: '.mysqli_error($conn));
    $conectado = mysqli_select_db($conn, $dbname) or die('Falha a conectar com o Banco de Dados: '.mysqli_error($conn));

    $table = 'usuario';
    
?>