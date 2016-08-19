
<?php include_once 'Usuario.php';
require_once 'upload.php';

    $username = '';
    $id = '';
    $nome = filter_input(INPUT_POST, 'name_user', FILTER_SANITIZE_STRING);
        
    $us = new Usuario($id, $nome);

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
<h1><label>SEU NOME:</label><input type="text" name="login" id="login"></h1><br>
<input type="submit" value="entrar" id="darNome" name="darNome"><br>
<a href="cadastro_form.php">NÃO É CADASTRADO? FAÇA O SEU CADASTRO!</a>
</form>
</body>
</html>


