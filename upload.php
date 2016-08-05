<?php



function gravaArquivo($ultimo_id) {
    
                    $username = '';
                    $id = 0;
                    $nome = filter_input(INPUT_POST, 'name_user', FILTER_SANITIZE_STRING);


setcookie('fotoUsuario');

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

echo "asdfasdf -".$target_file."--".$_FILES["fileToUpload"];

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if(!is_writable(dirname($target_file))) {
    echo dirname($target_file) . ' must writable!!!';
    echo "trying to create a writable directory";
    if (!mkdir($target_dir, 0777, true)) {
        die('Failed to create folders...');
    }else{
        echo "the directory was created ok<br>";
    }
} 

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    echo "<br>Trying to save the following path:<br>";
    echo $target_file;
    echo "<br>";

$salvaCerto = $target_dir. $ultimo_id . "." . $imageFileType;
//
//                    $us = new Usuario($id, $nome, $foto);
//                    $us->setUsername($username);

//    Aqui o arquivo inserido receberá um ID correspondente
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $salvaCerto)) {
      
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

//         $fotoCrianca = $target_file;
//         
//session_start();
//
//$_SESSION['foto'] = $fotoCrianca;
//            
//              header('Location: esseEhVoce.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    
       echo "<img alt='teste' src='uploads/" . basename( $_FILES["fileToUpload"]["name"]). "'/>"; 

}


}

