<?php 

session_start();

?>
<!DOCTYPE html>
<html>
    
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="confirma.css">
        
        <title>CONSULTA CADASTRO</title>
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
         
        <h1><a href="index.html" >AprendendoComAzul</a></h1>
            
            <div class="row">
                <div class="col-md-6 col-md-offset-3 caixa">
                    <h2>SEU CADASTRO NO AprendendoComAzul É:</h2>       

                    
               <?php //                                     Em SRC eu gostaria de inserir a imagem que acaba de ser enviada pelo usuário
                   
                   echo "<h1>NOME: " . $_SESSION['nome_usuario'] . "</h1>";
                   echo "<br>";
                   echo "<img alt='teste' class='img-rounded' src='" . $_SESSION['foto'] . "'/>"; 
              ?>
              
                            </div>
            </div>
            
           
                <div class="col-md-offset-4 col-md-2 botao">
                    <button class="btn btn-primary">DELETAR REGISTRO DO SISTEMA</button>   
                </div>
                
                <div class="col-md-offset-1 col-md-2 botao col-md-offset-3">
                    <button class="btn btn-primary"><a href="loginUsuario.html">ALTERAR REGISTRO</a></button>    
                </div>
            </div>
                
            
        </div>
        </div>
        </div>
    </body>
</html>
