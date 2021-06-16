<?php 
include_once('../Model/Banco.php');
include_once('../Model/Empresa.php');

  $cnpj = $_POST["cnpj"];
  $nome=$_POST["nome"];
  $telefone=$_POST["telefone"];
  $setor = $_POST["setor"]; 
  $email = $_POST["email"]; 
  $cep = $_POST["cep"];
  $rua = $_POST["rua"];
  $numero=$_POST["numero"];
  $bairro=$_POST["bairro"];
  $cidade= $_POST["cidade"];
  $estado= $_POST["estado"];
  $emp = new Empresa( $nome, $cnpj, $telefone, $setor,  $email, $cep, $rua, $numero, $bairro, $cidade, $estado);
  $emp->insereEmpresa();
  
  
?>