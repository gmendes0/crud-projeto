<?php

    if(!empty($_GET)){

        /*//==================================================================================================//*/
        /*---------------------------------------------\ DELETAR /---------------------------------------------*/
        
        if(!empty($_GET['delete'])){

            require 'script/php/dbconfig.php';

            $usuario = $_GET['delete'];

            $meusql = "DELETE FROM $table WHERE login = '$usuario'";
            mysqli_query($conn, $meusql);

            echo "<script>window.location='site.php'</script>";

        }
        
        /*/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\*/

        /*//==================================================================================================//*/
        /*----------------------------------------------\ UPDATE /---------------------------------------------*/
        
        
        
        /*/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\*/

    }

?>
<div class="lista">

    <table class="tabela">

        <thead>

            <tr>

                <td>login</td>
                <td>senha</td>
                <td>nome</td>
                <td>data do cadastro</td>
                <td>ativo</td>
                <td>editar</td>
                <td>deletar</td>

            </tr>

        </thead>

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

            <tr>
                <td><?php echo $sqlrow['login']; ?></td>
                <td><?php echo $sqlrow['senha']; ?></td>
                <td><?php echo $sqlrow['nome']; ?></td>
                <td><?php echo $sqlrow['datacadastro']; ?></td>
                <td><?php echo $sqlrow['ativo']; ?></td>
                <td><a href="<?php echo 'site.php?edit='.$sqlrow['login']?>">editar</a></td>
                <td><a href="<?php echo 'site.php?delete='.$sqlrow['login']?>">remover</a></td>

            </tr>

        <?php

            }

        ?>

    </table>

</div>