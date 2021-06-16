<?php
require('Entidade.php');
class Empresa extends Entidade{
    private $cnpj;
    private $setor;

    public function __construct($nome,$cnpj,$telefone,$setor,$email,$cep,$rua,$numero,$bairro,$cidade,$estado){
        
        $this->setNome($nome);
        $this->setCnpj($cnpj);
        $this->setTelefone($telefone);
        $this->setEmail($email);
        $this->setSetor($setor);
        $this->endereco = new Endereco();
        $this->endereco->setRua($rua);
        $this->endereco->setNumero($numero);
        $this->endereco->setBairro($bairro);
        $this->endereco->setCidade($cidade);
        $this->endereco->setCep($cep);
        $this->endereco->setEstado($estado);
        
    }

    function insereEmpresa(){
        $this->banco= new banco();
        $dados = array($this->nome, $this->cnpj,$this->telefone,$this->email, $this->setor);
        $r = $this->endereco->getRua();
        $n= $this->endereco->getNumero();
        $b = $this->endereco->getBairro();
        $c = $this->endereco->getCidade();
        $cp = $this->endereco->getCep();
        $e = $this->endereco->getEstado();
        $endereco = array($r, $n, $b, $c, $cp, $e, $this->email);
        $r = $this->banco->executeQueryInserirEmp($dados,$endereco);
        if($r == 1)
            echo '<h4 style = "color: red">Sucesso</h4>';
    }
    public function getCnpj(){
        return $this->cnpj;
    }
    public function getSetor(){
        return $this->setor;
    }

    public function setCnpj($s){
        $this->cnpj = $s;
    }
    public function setSetor($sr){
        $this->setor = $sr;
    }
}

/*if(isset($_POST['nome']) && isset($_POST['email'])&& isset($_POST['telefone'])&& isset($_POST['cep'])){

    $usuario = new Empresa($_POST['nome'],$_POST["cnpj"],$_POST["telefone"],$_POST["setor"],$_POST['email'], $_POST["cep"],$_POST["rua"],$_POST["numero"],$_POST["bairro"],$_POST["cidade"],$_POST["estado"]);
    $usuario->insereEmpresa();
  
   }else {
  
      header('Location: login.php');
   }   
}*/

