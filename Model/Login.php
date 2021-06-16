<?php 
include_once("Banco.php");
class Login
{
	
	public function doadorLogar($email,$senha){
		$banco= new banco();
	    $string_sql = "SELECT email, senha FROM doador WHERE email = '$email' AND senha = '$senha'" or die("erro ao selecionar");
	   	$r = $banco->Logar($string_sql);
		return $r;
	}
	function admLogar($email,$senha){
		$banco= new banco();
	    $string_sql = "SELECT email, senha FROM adm WHERE email = '$email' AND senha = ('$senha')" or die("erro ao selecionar");
	   	$this->banco->Logar($this->string_sql,$email);
	}

	public function Deslogar(){
		header('Location: login.php');
    	session_destroy();
	}


}



/*
if(isset($_POST['login']) && isset($_POST['senha'])){
	session_start();
	$login= new Login($_POST['login'],$_POST['senha']);
	$login->logar();

}else {
	header('Location: login.php');
    session_destroy();
   
  } 
?>*/