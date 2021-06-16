<?php
class Endereco{
    private $rua;
    private $numero;
    private $bairro;
    private $cidade;
    private $cep;
    private $estado;

    public function __contruct($r,$n,$b,$c,$cep,$e){
        $this->rua = $r;
        $this->numero=$n;
        $this->bairro=$b;
        $this->cidade= $c;    
        $this->cep = $cep;
        $this->estado= $e;
    }

    public function getRua(){
        return $this->rua;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getCep(){
        return $this->cep;
    }
    public function getEstado(){
        return $this->estado;
    }

    public function setRua($r){
        $this->rua = $r;
    }
    public function setNumero($n){
        $this->numero= $n;
    }
    public function setBairro($b){
        $this->bairro = $b;
    }
    public function setCidade($c){
        $this->cidade = $c;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function setEstado($e){
        $this->estado = $e;
    }  
}

