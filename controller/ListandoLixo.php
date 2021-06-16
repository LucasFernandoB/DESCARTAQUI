<?php
include_once('../Model/Banco.php');

$banco = new banco();
$query = sprintf("SELECT * FROM listaLixo");
$banco->executeListagem($query);

?>