<?php
    session_start();

    if(empty($_SESSION['nome'])){

        echo "<script>window.location='login.php'</script>";
        exit;

    }else{

        require "script/php/cad_banco.php";

    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Document</title>
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/style.css"/>
    </head>

    <body>

        <div class="center">

            <div class="cad-box">

                <form action="" method="post">
                    <div class="form-group">

                        <input type="text" name="login" required/>
                        <label for="">login</label>

                    </div>

                    <div class="form-group">

                        <input type="password" name="senha" id="senha" required/>
                        <label for="">senha</label>

                    </div>

                    <div class="form-group">

                        <input type="password" name="confirm" id="csenha" required/>
                        <label for="">confirmar senha</label>

                    </div>

                    <div class="form-group">

                        <input type="text" name="nome" id="" required/>
                        <label for="">nome</label>

                    </div>

                    <div class="form-group">

                        <input type="date" name="data" id=""/>
                        <label for="">Data</label>

                    </div>

                    <div class="form-group">

                        <select name="ativo">
                            <option value="s">sim</option>
                            <option value="n">não</option>
                        </select>

                    </div>

                    <div class="form-group">

                        <input type="submit" value="enviar"/>

                    </div>

                    
                    
                    
                    
                   
                    
                    
                </form>

            </div>

            <a href="site.php">Voltar</a>

        </div>
       
    </body>
</html>