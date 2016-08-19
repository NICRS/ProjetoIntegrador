<?php

include_once 'Usuario.php';
require_once 'upload.php';

    $username = '';
    $id = '';
    $nome = filter_input(INPUT_POST, 'name_user', FILTER_SANITIZE_STRING);
        
    $us = new Usuario($id, $nome);

    $dbcon = new mysqli('localhost', 'root', '', 'banco_user');

    if ($dbcon->connect_error) {
        die("Connection failed: " . $dbcon->connect_error);
    }

    $parametro = $nome;
    $sql = "SELECT id FROM table_usuarios WHERE nome LIKE “$parametro%” ";
    
    $sqlUsuario = mysqli_query($dbcon, $sql);
    $dadosrecebidos = mysqli_fetch_array($sqlUsuario, MYSQLI_ASSOC);
    $IDusuario = $dadosrecebidos['table_usuarios'];
    
   echo "Os IDs dos usuarios deste Select são: ".$IDusuario;
   
   session_start();

        $_SESSION['fotoExibida'] = $IDusuario;
        
    while ($IDusuario != 0){
        
        echo "<a href='menu.html'><img alt='login' class='img-circle' src='" . $_SESSION['fotoExibida'] . "'/></a>";
        echo "<br>";
        
    }
    

    