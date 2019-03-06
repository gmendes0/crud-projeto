<?php

    if(empty($_SESSION['nome'])){
        echo "<script>window.location='../../login.php'</script>";
        exit;
    }

    $host = "localhost";
    $user = "root";
    $senha = "";
    $dbname = "aula1";

    $conexao = mysqli_connect($host, $user, $senha, $dbname);
    $conectado = mysqli_select_db($conexao, $dbname) or die("Falha ao conectar com o banco de dadaos: ".mysqli_error($conexao));

    $meusql = "";

    $msg = ['','digite um nome de usuário','usuário existente','digite uma senha','digite um nome'];

    if(!empty($_POST)){

        if(!empty($_POST['login'])){

            $existente = false;
            $meusql = "SELECT login FROM usuario";
            $rsql = mysqli_query($conexao,$meusql) or die("Erro ao consultar o banco de dados: ".mysqli_error($conexao));

            while($rlinha = mysqli_fetch_array($rsql)){

                if($rlinha == $_POST['login']){

                    $existente = true;
                    
                }

            }

            if(!$existente){

                if(!empty($_POST['senha'])){

                    if(!empty($_POST['nome'])){

                        $login = $_POST['login'];
                        $senha = $_POST['senha'];
                        $nome = $_POST['nome'];
                        $dcadastro = date('Y-m-d H:i:s');

                        if($_POST['ativo'] == 's'){

                            $ativo = 1;

                        }else if($_POST['ativo'] = 'n'){

                            $ativo = 0;

                        }

                        $meusql = "INSERT INTO usuario(login, senha, nome, datacadastro, ativo) VALUES('$login', '$senha', '$nome', '$dcadastro', '$ativo')";
                        mysqli_query($conexao,$meusql) or die('Erro ao cadastrar: '.mysqli_error($conexao));

                    }else{

                        $n = 4;

                    }

                }else{

                    $n = 3;

                }

            }else{

                $n = 2;

            }

        }else{

            $n = 1;

        }

    }

?>