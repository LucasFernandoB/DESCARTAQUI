<?php 
include_once("Banco.php");

class Contato{
    private $nome;
    private $email;
    private $telefone;
    private $mensagem;
   

    public function __construct($nome,$email,$telefone,$mensagem){
        $this->nome=$nome;
        $this->email = $email; 
        $this->telefone = $telefone;
        $this->mensagem = $mensagem;
    }
    function insereContato(){
        $this->banco= new banco();
        $this->string_sql = "INSERT INTO Contato (nome,email,telefone,mensagem) VALUES ('$this->nome','$this->email','$this->telefone','$this->mensagem')"; 
        $this->banco->executeQueryInserir($this->string_sql);
    }
    public function getEmail (){
        return $this->email;
    }
    public function getNome(){
        return $this->nome;
    }
    function getTelefone(){
        return $this->telefone;
    }
    function getMensagem(){
        return $this->mensagem;
    }
    
    function setMensagem($mensagem){
        $this->mensagem=$mensagem;
    }
    function setTelefone($telefone){
        $this->telefone=$telefone;
    }
    function setNome($nome){
        $this->nome=$nome;
    }
    function setEmail($email){
        $this->email=$email;
    }
    function setString_sql($string_sql){
        $this->string_sql=$string_sql;
    }
}

$c = new Contato('kelly','kelly@.com','222222222','to puta');
$c->insereContato();

