<?php
    /* *** *** *** Sem Class *** *** ***

        $host = 'localhost';
        $user = 'root';
        $senha = '';
        $dbname = 'aula1';

        $conn = mysqli_connect($host, $user, $senha, $dbname) or die('Falha de conexão com o Banco de Dados: '.mysqli_error($conn));
        $conectado = mysqli_select_db($conn, $dbname) or die('Falha a conectar com o Banco de Dados: '.mysqli_error($conn));

        $table = 'usuario';
    
    *** *** *** Sem Class *** *** *** */
?>

<?php

    class Banco{

        public $table = 'usuario';

        public function conectar(){

            $host = 'localhost';
            $user = 'root';
            $senha = '';
            $dbname = 'aula1';

            $connection = mysqli_connect($host, $user, $senha, $dbname) or die('Falha de conexão com o Banco de Dados: '.mysqli_error($connection));
            $conectado = mysqli_select_db($connection, $dbname) or die('Falha a conectar com o Banco de Dados: '.mysqli_error($connection));

            return $connection;

        }

        public function desconectar(){

            mysqli_close();

        }

    }

    $conn = new Banco;
    $conn->conectar();

?>