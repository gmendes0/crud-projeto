<div class="cad-box" style="margin: auto;">
    
    <h1>Cadastro</h1>
    <h2 class="cad-box__aviso aviso--erro"><?php if(!empty($n)){echo $erro[$n];} ?></h2>
    <form action="" method="post">
        <div class="form-group">

            <input type="text" name="login" value="<?php echo $u['login']; ?>" required/>
            <label for="">login</label>

        </div>

        <div class="form-group">

            <input type="password" name="senha" id="senha" value="<?php echo $u['senha']; ?>" required/>
            <label for="">senha</label>

        </div>

        <div class="form-group">

            <input type="password" name="confirm" id="csenha" value="<?php echo $u['senha']; ?>" required/>
            <label for="">confirmar senha</label>

        </div>

        <div class="form-group">

            <input type="text" name="nome" id="" value="<?php echo $u['nome']; ?>" required/>
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

</div>