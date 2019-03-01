<?php

    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $dbname = 'aula1';

    $conn = mysqli_connect($host, $user, $senha, $dbname) or die('Falha de conexão com o Banco de Dados: '.mysqli_error($conn));
    $conectado = mysqli_select_db($conn, $dbname) or die('Falha a conectar com o Banco de Dados: '.mysqli_error($conn));

    $table = 'usuario';
    $meusql = "SELECT * FROM $table";
    $rsql = mysqli_query($conn, $meusql) or die('Erro ao realizar a consulta: '.mysqli_error($conn));
    
    while($sqlrow = mysqli_fetch_array($rsql)){

        $login = $_POST['login'];
        $senha = $_POST['senha'];

        if($login == $sqlrow['login'] && $senha == $sqlrow['senha']){

            $valido = true;
            $nome = $sqlrow['nome'];
            $_SESSION['nome'] = $nome;
            echo "<script>window.location='load.php'</script>";
            
        }else{

            $valido = false;
            $n = 4;
            
        }

    }

?>