 <?php 

include_once 'Usuario.php';
require_once 'upload.php';

    $username = '';
    $id = '';
    $nome = filter_input(INPUT_POST, 'name_user', FILTER_SANITIZE_STRING);
    
    
    $us = new Usuario($id, $nome);
    $us->setUsername($username);
    

    $dbcon = new mysqli('localhost', 'root', '', 'banco_user');

    if ($dbcon->connect_error) {
        die("Connection failed: " . $dbcon->connect_error);
    }

    $sql = "INSERT into table_usuarios (nome) values (?)";
    
    $stmt= $dbcon->prepare($sql);
    $stmt->bind_param('s', $nome);
    $stmt->execute();

    if (mysqli_query($dbcon, $sql)){ 

   //recebo o último id
     $ultimo_id = mysqli_insert_id($dbcon); 
     
     }else{ 
        echo ""; 
     } 

    $nomeUsuario = filter_input(INPUT_POST, 'name_user', FILTER_SANITIZE_STRING); 
    
    //Cenários de teste de erros possíveis

         if($nomeUsuario == null || trim($nomeUsuario) == '') {
            $msgErro = '';
            include 'cadastro_form.php';                              
              }

         if ($target_file == null || trim($target_file) == ''){
            $msgErro = '';
            include 'cadastro_form.php'; 
         }
         
    
    session_start();
    
    $_SESSION['nome_usuario'] = $nome;

         gravaArquivo($ultimo_id);
    
    echo "deu certo";

    header('Location: esseEhVoce.php');
    //Conexão com o Banco de Dados funcionando.
            
                
