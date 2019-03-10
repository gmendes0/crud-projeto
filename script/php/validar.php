<?php

    class Validacao{

        private $login;
        private $senha;
        private $confirm;
        
        public function __construct($l, $s, $c){

            $this->login = $l;
            $this->senha = $s;
            $this->confirm = $c;

        }

        private function existente(){

            $existente = false;
            $host = 'localhost';
            $user = 'root';
            $senha = '';
            $dbname = 'aula1';

            $conn = mysqli_connect($host, $user, $senha, $dbname) or die('Falha de conexão com o Banco de Dados: '.mysqli_error($conn));
            $conectado = mysqli_select_db($conn, $dbname) or die('Falha a conectar com o Banco de Dados: '.mysqli_error($conn));

            $table = 'usuario';

            $meusql = "SELECT login FROM $table";
            $resultadosql = mysqli_query($conn, $meusql);

            while($rsql = mysqli_fetch_array($resultadosql)){

                if($rsql == $this->login){

                    $existente = true;

                }

            }

            return $existente;

        }

        private function valSenha(){

            if($this->senha == $this->confirm){

                return true;

            }else{

                return false;

            }

        }

        public function validar(){

            if(!$this->existente()){

                if($this->valSenha()){

                    return true;

                }else{

                    return false;

                }

            }else{

                return false;

            }

        }

    }

?>