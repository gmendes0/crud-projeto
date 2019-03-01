<?php
    session_start();

    if(empty($_SESSION['nome'])){
        echo "<script>window.location='login.php'</script>";
        exit;
    }else if(!empty($_SESSION['logado'])){
        echo "<script>window.location='site.php'</script>";
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="refresh" content="2;URL=site.php"/>
</head>
<body>
    <div class="load">
        <img src="load.gif"/>
        <h2>VOCÊ ESTÁ LOGADO</h2>
    </div>
</body>
</html>