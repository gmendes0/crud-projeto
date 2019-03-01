<?php

    session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>login</title>
        <link rel="stylesheet" href="css/main.css"/>
        <script src="script/js/caroucel.js"></script>
    </head>

    <body>
        <div class="center">

            <div class="login-box">
            
                <h1>Login</h1>

                <form action="login.php" method="post">

                    <div class="form-group">
                        <input type="text" name="login" required/>
                        <label for="">login</label>
                    </div>

                    <div class="form-group">
                        <input type="password" name="senha" required/>
                        <label for="">senha</label>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="login" class="button"/>
                    </div>

                </form>

                <?php

                    if(!empty($_POST)){

                        if(!empty($_POST['login']) && !empty($_POST['senha'])){

                            require 'script/php/banco.php';

                        }

                    }

                ?>

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