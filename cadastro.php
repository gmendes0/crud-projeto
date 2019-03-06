<?php
    session_start();

    if(empty($_SESSION['nome'])){

        echo "<script>window.location='login.php'</script>";
        exit;

    }else{

        require "script/php/dbcadastro.php";

    }

    $erro = ['','Preencha o campo login','','',''];

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Document</title>
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="script/js/carousel.js"></script>
    </head>

    <body>

        <div class="center">

            <div class="cad-box">
                <h1>Cadastro</h1>
                <h2 class="cad-box__aviso aviso--erro"><?php if(!empty($n)){echo $erro[$n];} ?></h2>
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

                        <select name="ativo">
                            <option value="s">sim</option>
                            <option value="n">não</option>
                        </select>

                    </div>

                    <div class="form-group">

                        <input type="submit" value="enviar" class="button"/>

                    </div>

                </form>

                <a href="site.php">Voltar</a>

            </div>

            <div class="imgSlide" style="background: url(backgrounds/05.jpeg);"></div>
            <div class="imgSlide" style="background: url(backgrounds/00.jpeg);"></div>
            <div class="imgSlide" style="background: url(backgrounds/02.jpeg);"></div>
            <div class="imgSlide" style="background: url(backgrounds/03.jpeg);"></div>
            <div class="imgSlide" style="background: url(backgrounds/04.jpeg);"></div>
            <script>
                carousel();
            </script>

        </div>
       
    </body>
</html>