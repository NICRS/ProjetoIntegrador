<?php

session_start();

   $_SESSION['questao'] = chr(65);

   header('Location: letras_imagens.php');

     

//echo "tá rodando";