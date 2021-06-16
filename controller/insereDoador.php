<?php 
include_once('../Model/Banco.php');
include_once('../Model/Doador.php');

  $senha = $_POST["senha"];
  $nome=$_POST["nome"];
  $telefone=$_POST["telefone"];
  $email = $_POST["email"]; 
  $cep = $_POST["cep"];
  $rua = $_POST["rua"];
  $numero=$_POST["numero"];
  $bairro=$_POST["bairro"];
  $cidade= $_POST["cidade"];
  $estado= $_POST["estado"];
  $doador = new Doador($senha, $nome, $telefone, $email, $cep, $rua, $numero, $bairro, $cidade, $estado);
  $doador->insereDoador();
  
  
?>