<?php

    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $dbname = 'aula1';

    $conn = mysqli_connect($host, $user, $senha, $dbname) or die('Falha de conexão com o Banco de Dados: '.mysqli_error($conn));
    $conectado = mysqli_select_db($conn, $dbname) or die('Falha a conectar com o Banco de Dados: '.mysqli_error($conn));

    $table = 'usuario';
    
    $meusql = "SELECT * FROM $table";
    $rsql = mysqli_query($conn, $meusql);

    while($sqlrow = mysqli_fetch_array($rsql)){

?>
        <div class="card">

            <h3 class="card__h3">login</h3>
            <p class="card__conteudo"><?php echo $sqlrow['login'] ?></p>
            <h3 class="card__h3">senha</h3>
            <p class="card__conteudo"><?php echo $sqlrow['senha'] ?></p>
            <h3 class="card__h3">nome</h3>
            <p class="card__conteudo"><?php echo $sqlrow['nome'] ?></p>
            <h3 class="card__h3">data de cadastro</h3>
            <p class="card__conteudo"><?php echo $sqlrow['datacadastro'] ?></p>
            <h3 class="card__h3">ativo</h3>
            <p class="card__conteudo"><?php echo $sqlrow['ativo'] ?></p>

        </div>
<?php

    }

?>