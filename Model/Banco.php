<?php
class Banco{

	private $connect;
	private $db;
	
	function __construct()
	{
		$this->connect = mysqli_connect('localhost','root','') ;
 		$this->db = mysqli_select_db($this->connect,'projetoFinalESOF');
	}
	
	function executeQueryInserir($string_sql)
	{
		mysqli_query($this->connect,$string_sql);
		if(mysqli_affected_rows($this->connect) == 1)
	    {
	    	$mensagem="dados enviados com sucesso!";
	    	echo json_encode($mensagem);
	    	mysqli_close($this->connect);die();
	        
	    }else {
	        $mensagem="Erro, nao possível inserir no banco de dados";
	        echo json_encode($mensagem);
	        mysqli_close($this->connect);die();
	     
	    }
	}
	
	function executeQueryInserirEmp($dados,$endereco )
	{
		//para insrir em tabelas diferentes foi necessario a criação de uma transação
		mysqli_autocommit($this->connect, false); 
		mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
		$insert1 = false; //variaveis responsaveis por armazenar o resultado do insert nas tabelas
		$insert2 = false;
		try{ //iniciando a transação
			$sql = "INSERT INTO empresa(nome,cnpj,telefone,email,setor) values (?,?,?,?,?)"; //comandos para inserção no banco
			$stmt = mysqli_prepare($this->connect, $sql); //preparando a conexão com o banco e a inserção
   			mysqli_stmt_bind_param($stmt, 'sssss', $dados[0], $dados[1],$dados[2], $dados[3], $dados[4]); //dados que serão inseridos
    		$insert1 =  mysqli_stmt_execute($stmt);//tenativa de inserção na primira tebela

			$sql ="INSERT INTO endereco(rua,numero,bairro,cidade,cep,estado, emailEmp) values (?,?,?,?,?,?,?)";
			$stmt = mysqli_prepare($this->connect, $sql);
    		mysqli_stmt_bind_param($stmt, 'sssssss', $endereco[0], $endereco[1],$endereco[2], $endereco[3], $endereco[4], $endereco[5], $endereco[6]);
    		$insert2 = mysqli_stmt_execute($stmt); //tentaiva de inserção na segunda tabela
		}catch (mysqli_sql_exception $e){
			echo 'SQLState: '. $e->getCode() .' <br>Descrição: '. $e->getMessage();  //caso não de certo, retorna o tipo de excessão
		}
		if($insert1 && $insert2){ //caso ambas inserções tenha dado certo, execulta o commit
			mysqli_commit($this->connect);
			return 1;
		 } 
		 mysqli_close($this->connect);
	}
	  
	function executeQueryInserirDoador($dados,$endereco )
	{
		mysqli_autocommit($this->connect, false);
		mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
		$insert1 = false;
		$insert2 = false;
		try{
			$sql = "INSERT INTO doador(nome,telefone,email,senha) values (?,?,?,?)";
			$stmt = mysqli_prepare($this->connect, $sql);
   			mysqli_stmt_bind_param($stmt, 'ssss', $dados[0], $dados[1],$dados[2], $dados[3]);
    		$insert1 =  mysqli_stmt_execute($stmt);

			$sql ="INSERT INTO endereco(rua,numero,bairro,cidade,cep,estado, emailDoador) values (?,?,?,?,?,?,?)";
			$stmt = mysqli_prepare($this->connect, $sql);
    		mysqli_stmt_bind_param($stmt, 'sssssss', $endereco[0], $endereco[1],$endereco[2], $endereco[3], $endereco[4], $endereco[5], $endereco[6]);
    		$insert2 = mysqli_stmt_execute($stmt);
		}catch (mysqli_sql_exception $e){
			return $e->getMessage();  
		}
		if($insert1 && $insert2){
			mysqli_commit($this->connect);
			return 1;
		 } 
		 mysqli_close($this->connect);
	}
	/*
	function executeQueryLixo($string_sql)
	{
		mysqli_query($this->connect,$string_sql);
		if(mysqli_affected_rows($this->connect) == 1)
	    {
	    	echo"<script language='javascript' type='text/javascript'>alert('dados enviados com sucesso!');window.location.href='frontLixo.php';</script>";
	    	mysqli_close($this->connect);die();
	        
	    }else {
	        echo"<script language='javascript' type='text/javascript'>alert('erro!');window.location.href='frontLixo.php';</script>";
	        mysqli_close($this->connect);die();
	     
	    }
	}*/

	function Logar($string_sql){
	  $verifica = mysqli_query($this->connect,$string_sql);
	  if (mysqli_num_rows($verifica)==0){
	   return 0;
	  }else{
		return 1;
	  }
	  mysqli_close($this->connect);

	}

	function executeListagem($string_sql)
	{
		$dados = mysqli_query($this->connect,$string_sql) ;
		$linha = mysqli_fetch_assoc($dados);
		$total = mysqli_num_rows($dados);
		$lixo= array();
	  	
	  	if($total > 0) {
			do {
			$lixo[]=$linha;
			}while($linha = mysqli_fetch_assoc($dados)); 
	    }
	  	echo json_encode($lixo);
		mysqli_close($this->connect);
	}
}


?>