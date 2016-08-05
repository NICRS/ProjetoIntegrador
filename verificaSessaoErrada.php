<?php 

session_start();

$temp = ord($_SESSION['questao']);
if($temp >= 65 && $temp<90){
$resultado = $temp;
$_SESSION['questao'] = chr($resultado);
header('Location: letras_imagens.php');
}else{
header('Location: virouJogo.html');
}


