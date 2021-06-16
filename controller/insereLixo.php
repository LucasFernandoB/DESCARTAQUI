<?php
include_once('../Model/Lixo.php');

if(isset($_POST['tipo']) && isset($_POST['descricao']) && isset($_POST['email']) && isset($_POST['telefone'])){
 
    $descricao = $_POST["descricao"]; 
    $email = $_POST["email"]; 
    $tipo= $_POST["tipo"];

    var_dump( $_FILES['imagem']['name']);
    if (($_FILES['imagem']['name']!="")){
    // Where the file is going to be stored
    $target_dir = "C:/xampp/htdocs/trabalhofinal/upload/";
    $file = $_FILES['imagem']['name'];
    $path = pathinfo($file);
    $filename = $path['filename'];
    $ext = $path['extension'];
    $temp_name = $_FILES['imagem']['tmp_name'];
    $path_filename_ext = $target_dir.$filename.".".$ext;
    move_uploaded_file($temp_name,$path_filename_ext);
    //pra quando eu for listar a imagem eu listar ela certa
    $salv = "../upload/";
    $pasta=$salv.$filename.".".$ext;
    }
    if($file=="" || $file==null){
        $pasta="../upload/ico.png";
    }

   $lixo = New lixo($descricao,$email,$pasta,$tipo);
   $lixo->insereLixo();


}else {
  //se o usuario nao estiver logado eu direciono ele pra pagina de login
    header('Location: login.php');
}   
?>