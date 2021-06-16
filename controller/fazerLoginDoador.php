<?php
    include_once('../Model/Login.php');

	session_start();
	$login= new Login();
	$r = $login->doadorLogar($_POST['email'],$_POST['senha']);
    if($r==1){
        $_SESSION['logado']="logado";
        echo json_encode(1);
    }

?>