<?php 

session_start();



?>


<!DOCTYPE html>

<html>

    <head>
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="bem_vindo.css">
        
        <title>Boas Vindas</title>
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
            
            <div class="row">
                <div class="col-md-6 col-md-offset-3 ola">
            
                    <h2>OLÁ, 
                    <?php 
                    
                        echo $_SESSION['nome_usuario'];
                       
                        
                    ?>. EU SOU O SÔNICO, O ROBÔ AJUDANTE! EU VOU AJUDAR VOCÊ A USAR O AprendendoComAzul!</h2>
                </div>   
            </div>      
            
            
            <div class="row jeito">
                <div class="col-md-1 col-md-offset-6 botao">
                    <a href="menu.html" class="btn btn-info" role="button">VAMOS COMEÇAR!</a>
                </div>
                
                
                <div class="col-md-offset-1 col-md-4 sonico">
                    <img class="img-responsive" src="img/mascote.png">            
                </div>    
            </div>
              
              
                
            
           
        </div>
        </div>
        </div>
    </body>
</html>