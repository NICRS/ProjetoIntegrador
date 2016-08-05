
<?php include_once 'Usuario.php';

    $username = '';
    $nome = filter_input(INPUT_POST, 'name_user', FILTER_SANITIZE_STRING);
    
    
    $us = new Usuario($id, $nome);
    $us->setUsername($username);
    

    $dbcon = new mysqli('localhost', 'root', '', 'banco_user');

    if ($dbcon->connect_error) {
        die("Connection failed: " . $dbcon->connect_error);
    }
?>
<html>
<head>
<title> Login de Usuário </title>
<meta charset="UTF-8">
</head>
<body>
    
                    <?php if(isset($msgErro)): ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <?php echo $msgErro ?>
                    </div>
                <?php endif; ?>
    
<form method="POST" action="login.php">
<label>Login:</label><input type="text" name="login" id="login"><br>
<?php
echo "<label>QUEM É VOCÊ?</label><a href='login.php'><img alt='id' src='" . $id . "'></a><br>"; ?>
<input type="submit" value="entrar" id="entrar" name="entrar"><br>
<a href="cadastro_form.php">NÃO É CADASTRADO? FAÇA O SEU CADASTRO!</a>
</form>
</body>
</html>


