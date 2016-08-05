<html lang="en">
    <head>
         
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="menu.css" rel="stylesheet">

        
        <title>Letras e Imagens - Alfabetização</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
             
             
            <div class="container"> 
            <div class="col-md-12">
            <div class="configdiv">
        
            <style>
                a :hover {
                    background-color: #2055f4 ;

            </style>        
            
                    <h1><a href="index.html" >AprendendoComAzul</a></h1>
                    
                

<?php
//        if (isset($_COOKIE['name_user'])) {
//              setcookie('name_user',$_COOKIE['name_user'] + 1,time()+6000);        
//              echo "Você está jogando a Atividade Alfabetização pela ". $_COOKIE['name_user'] ."ª vez"; 
//              echo "</br>";
//          }
//          else{
//               setcookie('name_user', 1, time()+6000);
//          }
//          
//      Ainda em fase de testes com o Banco de Dados, por isso zerado.
//          setcookie('name_user', 0, time()+6000);
           
           
    $matriz = array(
				'A' => ["CAIXA", "BOLA", "CASA", "LIVROS"],
				'B' => ["LAÇO", "TESOURA", "ROSA", "TATU"],
                                'C' => ["LARANJA", "LIVROS", "MENINO", "SOL"],
                                'D' => ["ABACAXI", "GARFO", "BOLA", "ESTRELA"],
                                'E' => ["CAIXA", "ÁRVORE", "ROSA", "ANEL"],
                                'F' => ["PIPOCA", "ESTRELA", "BALÃO", "TESOURA"],
                                'G' => ["PIZZA", "PICOLÉ", "SOFÁ", "MENINO"],
                                'H' => ["URSINHO", "PÁSSARO", "LARANJA", "ÁRVORE"],
                                'I' => ["PIPOCA", "BORBOLETA", "ROSA", "CAIXA"],
                                'J' => ["LIVROS", "PIPOCA", "GARFO", "MENINO"],
                                'K' => ["LAÇO", "BANANA", "SOFÁ", "ESTRELA"],
                                'L' => ["PIZZA", "ÁRVORE", "GARFO", "ANEL"],
                                'M' => ["BORBOLETA", "PICOLÉ", "PIPOCA", "ESTRELA"],
                                'N' => ["ANEL", "CASA", "TÊNIS", "TESOURA"],
                                'O' => ["PÁSSARO", "ABACAXI", "TATU", "CAIXA"],
                                'P' => ["MENINO", "ROSA", "LIVROS", "SOFÁ"],
                                'Q' => ["CASA", "SOFÁ", "BANANA", "GARFO"],
                                'R' => ["LAÇO", "BALÃO", "TÊNIS", "TESOURA"],
                                'S' => ["ABACAXI", "ANEL", "ÁRVORE", "CAIXA"],
                                'T' => ["PÁSSARO", "ESTRELA", "ROSA", "LIVROS"],
                                'U' => ["LARANJA", "PIPOCA", "BALÃO", "GARFO"],
                                'V' => ["MENINO", "ABACAXI", "TATU", "URSINHO"],
                                'W' => ["BORBOLETA", "PIPOCA", "GARFO", "ANEL"],
                                'X' => ["LIVROS", "BANANA", "SOFÁ", "ESTRELA"],
                                'Y' => ["PÁSSARO", "ABACAXI", "TATU", "CAIXA"],
                                'Z' => ["LAÇO", "CASA", "TÊNIS", "ÁRVORE"],
        
        
			  );
    
    $ImagemCorreta = array(
				'A' => "AVIÃO",
				'B' => "BOLA",
                                'C' => "CAVALO", 
                                'D' => "DADO", 
                                'E' => "ELEFANTE", 
                                'F' => "FOCA", 
                                'G' => "GATO", 
                                'H' => "HELICÓPTERO",
                                'I' => "ILHA",
                                'J' => "JACARÉ",
                                'K' => "KAN",
                                'L' => "LUA",
                                'M' => "MACACO",
                                'N' => "NAVIO",
                                'O' => "OVELHA",
                                'P' => "PORTA",
                                'Q' => "QUEIJO",
                                'R' => "RATO",
                                'S' => "SAPO",
                                'T' => "TOALHA",
                                'U' => "UVA",
                                'V' => "VACA",
                                'W' => "WAFER",
                                'X' => "XÍCARA",
                                'Y' => "YOKI",
                                'Z' => "ZEBRA",
        
        
			  );      
    
    
    
    // sessions.php
    
    
    session_start();
    
    $resultado = $_SESSION['questao']; 
        echo "<h1 style='font-size: 200px; text-align: center;'>" .$resultado. "</h1>";

 ?>      
        
    <div class="container-fluid">
    <div class="row">
       
        
      
  
        <div class="col-md-8 imagem">
     <?php         
        echo "<a href='acertou.html'><img class='img-rounded width='200' height='336' src=\"img/" .$ImagemCorreta[$resultado]. ".png\"/></a>";
        print "<h2>" .$ImagemCorreta[$resultado]. "</h2>"; 
    ?>      
       </div>;     
            
        <div class="col-md-3  imagem">
    <?php        
        $resultadoRand = $matriz[$resultado][rand(0,3)];
        echo "<a href='errou.html'><img class='img-rounded width='350' height='336' src=\"img/" .$resultadoRand. ".png\"/></a>";
        print "<h2>" .$resultadoRand. "</h2>";
    ?>    
        </div>
      
    </div> 
    </div>
    </div> 
    </div> 
    </div>
    

 </body>
</html>