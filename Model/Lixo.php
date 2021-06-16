<?php
include_once("Banco.php");
class Lixo{
    private $tipo;
    private $descricao; 
    private $emailDoador;
    private $caminho;
    private $reservado;

    public function __construct($descricao,$emailDoador,$caminho,$tipo){
        $this->descricao= $descricao;
        $this->emailDoador = $emailDoador; 
        $this->caminho=$caminho;
        $this->tipo = $tipo;
    }
    
    function insereLixo(){
        $this->banco= new banco();
        $this->string_sql =  "INSERT INTO lixo (tipo, caminho,descricao,emailDoador)
        VALUES ('$this->tipo','$this->caminho','$this->descricao','$this->emailDoador')";
        $this->banco->executeQueryInserir($this->string_sql);
        
    }
/*
    function carregaImagemLixo(){
        if (($_FILES['imagem']['name']!="")){
            $target_dir = "C:/xampp/htdocs/ProjFinal/upload/";
            $file = $_FILES['imagem']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['imagem']['tmp_name'];
            $path_filename_ext = $target_dir.$filename.".".$ext;
            move_uploaded_file($temp_name,$path_filename_ext);
            $salv = "upload/";
            
            $caminho=$salv.$filename.".".$ext;
        }
        if($file=="" || $file==null){
        $caminho="upload/ico.png";
        }
        return $caminho;
    }*/
    function listaLixo(){
        $this->banco= new banco();
        $this->string_sql = sprintf("SELECT * FROM listaLixo");
        $result = $this->banco->executeQueryListarDados($this->string_sql);
        return $result;
    }

    function setPasta($pasta){
        $this->pasta=$pasta;
    }

}



/*
if(isset($_POST['descricao']) && isset($_POST['dono'])){//vindo pra inserir
  $lixo = new Lixo($_POST["descricao"],$_POST["dono"], $_POST["telefone"],$_POST["email"],$_POST["rua"],$_POST["numero"],$_POST["bairro"],$_POST["cidade"],$_POST["estado"],"teste");
  
  $resultado=$lixo->carregaImagemLixo();
  $lixo->setPasta($resultado);
  $lixo->insereLixoBanco();


}else {

  $lixo = new Lixo("","","","","","","","","","");
  $lixo->listaLixo();
}   
?>*/


