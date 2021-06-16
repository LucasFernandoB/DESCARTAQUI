<?php
include_once('Banco.php');
include_once('Endereco.php');
include_once('Login.php');

abstract class Entidade{
    protected $nome;
    protected $email;
    protected $senha;
    protected $telefone;
    protected $endereco;
    

    public function getNoma(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function setEmail($e){
        $this->email= $e;
    }
    public function setTelefone($t){
        $this->telefone = $t;
    }
    public function setSenha($sa){
        $this->senha=$sa;
    }

}