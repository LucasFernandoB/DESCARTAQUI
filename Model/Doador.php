<?php
require('Entidade.php');
class Doador extends Entidade{
    
    public function __construct($senha,$nome,$telefone,$email,$cep,$rua,$numero,$bairro,$cidade,$estado){
        $this->setSenha($senha);
        $this->setNome($nome);
        $this->setTelefone($telefone);
        $this->setEmail($email);
        $this->endereco = new Endereco();
        $this->endereco->setRua($rua);
        $this->endereco->setNumero($numero);
        $this->endereco->setBairro($bairro);
        $this->endereco->setCidade($cidade);
        $this->endereco->setCep($cep);
        $this->endereco->setEstado($estado);
      }
      function insereDoador(){
        $this->banco= new banco();
        $dados = array($this->nome,$this->telefone,$this->email,$this->senha);
        $r = $this->endereco->getRua();
        $n= $this->endereco->getNumero();
        $b = $this->endereco->getBairro();
        $c = $this->endereco->getCidade();
        $cp = $this->endereco->getCep();
        $e = $this->endereco->getEstado();
        $endereco = array($r, $n, $b, $c, $cp, $e, $this->email);
        $r = $this->banco->executeQueryInserirDoador($dados,$endereco);
        if($r == 1)
            echo '<h4 style = "color: red">Sucesso</h4>';
        else
            echo '<h4 style = "color: red">'.$r.'</h4>';
    }
}

