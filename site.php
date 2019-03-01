<?php
    session_start();

    if(empty($_SESSION['nome'])){
        echo "<script>window.location='login.php'</script>";
    }else{
        $_SESSION['logado'] = true;
    }

    if(!empty($_GET['sair'])){

        $_SESSION = array();
        echo "<script>window.location='login.php'</script>";
        exit;

    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Site</title>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <div class="menu">
            <ul>
                <li><a><?= 'Olá '.$_SESSION['nome']; ?></a></li>
                <li class="left"><a href="site.php?sair=1">sair</a></li>
                <li class="left"><a href="cadastro.php">cadastrar</a></li>
            </ul>
        </div>
    </body>
</html>