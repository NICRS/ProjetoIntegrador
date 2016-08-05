<!DOCTYPE html>
<html>
   
    
    
    <head>
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="interface/cadastro_form.css">
        
        <title>Cadastro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
  
        <div class="container-fluid"> 
        <div class="col-md-12">
        <div class="configdiv">
                
        <style>
                a :hover {
                    background-color: #2055f4 ;
        </style>   

            <h1><a href="index.html">AprendendoComAzul</a></h1>
            </div>
                <?php if(isset($msgErro)): ?>
                     <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Opa!</strong> Você não informou o seu nome ou não realizou o upload da sua foto.
                    </div>
                        <?php echo $msgErro ?>
                    </div>
                <?php endif; ?>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 formulario">
                    <h3>INSIRA, ABAIXO, O NOME DE QUEM VAI JOGAR E VAMOS COMEÇAR!</h3>

                   <form action="conexao.php" method="POST" enctype="multipart/form-data">
					<h3>NOME: <input type="text" name="name_user"></h3>
                                        <h3>FAÇA O UPLOAD DA SUA FOTO PARA JOGAR:</h3> 
                                        
                                        <div class="col-md-1 col-md-offset-1 botao">
                                                <input  class="btn btn-default btn-lg" role="button" type="file" name="fileToUpload" id="fileToUpload">
                                                <?= $recebeInputTemp = filter_input(INPUT_POST, 'fileToUpload', FILTER_SANITIZE_STRING); ?>
                                          </div>

                                          <div class="col-md-1 col-md-offset-6 botao">
                                                <input  class="btn btn-primary btn-lg" role="button" type="submit" value="Fazer Upload" name="submit">
                                                 
                                          </div>
                </div>
                                        <br>
				<input type="submit" class="btn btn-info" value="JOGAR"></a>
                   </form>

                </div>    
            </div>
            
            <div class="row jeito">
<!--    Colocados na mesma DIV, para ficarem dentro do formulário  <a href="conexao.php"><input type="submit" class="btn btn-info" value="JOGAR"></a>-->                 
                
                <div class="col-md-offset-8 col-md-4 sonico">
                    <img class="img-responsive" src="img/mascote de lado.png">            
                </div>    
            </div>
            

        </div>
        </div>
        </div>
        
        
        <script src="jquery/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
    </body>
</html>
