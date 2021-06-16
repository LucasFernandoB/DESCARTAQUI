<?php
session_start();
//vejo se o usuario esta logado no sistema
if (isset(  $_SESSION['logado'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DESCARTAQUI</title>
  <meta charset="utf-8">

  <!-- link dos botstrap para a barra de menu responsivel-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- link das pastas para a eslilizacao do site-->
  <link rel="stylesheet" href="../css/estilo.css"/>
  <script type="text/javascript" src="../java/javascript.js"></script>
   
  <script rsc="text/javascript">
    $(function() {
        $("#meuform").submit(function(event){
            event.preventDefault();

            var dados_form = $(this).serialize();
            //defino que o evento sera pego atraves do form , e que sera mandado pra pagina de php, e mostro na
            //div as mensagem vinda do php
            $.ajax({
                type:"post",
                url:"../Controller/inserelixo.php",
                data:dados_form,
                success: function(responseData){
                    $("#mensagemDiv").html(""+responseData);
                    document.getElementById('tipo').value = "";
                    document.getElementById('descricao').value = "";
                    document.getElementById('email').value = "";
                    document.getElementById('imagem').value = "";
                    $().ready(function() {
                        setTimeout(function () {
                          $('#mensagemDiv').hide();
                        }, 2500); 
                      });
                },
                error: function(request,status,error){
                    $("#mensagemDiv").html(""+responseText);
                    $().ready(function() {
                        setTimeout(function () {
                          $('#mensagemDiv').hide();
                        }, 2500);
                      });
                }
            });
        });
    });
  </script>

</head>
<body>
<!--parte do menu com as opcoes -->
<?php
      include_once("navebar.php");
  ?>
 
 <!--conteudo da pagina --> 
<div class="container">
  <div class="coluna col15">

    <form class="form-horizontal" id="meuform" method="post" name="form" enctype="multipart/form-data" action="insereLixo.php"><br><br>
      <fieldset>
        <div class="panel panel-primary">
          <div class="panel-heading" id="alinhamentoCentro">Cadastro de Lixo Eletrônico</div>
             <div class="panel-body">
              <!-- Text input-->
                <div class="form-group">
                  <div>
                    <center> 
                    <img id="imgPrev" class="addimagem"  src="../img/ico.png"><br><br>
                   <input  name="imagem" id="imagem"  type="file" class="btn btn-primary" onchange = "previewImagem()" />
                  </center><br>  
                  </div>
                  <label class="col-md-2 control-label" for="tipo">Tipo <h11>*</h11></label>  
                  <div class="col-md-9">
                    <input id="tipo" name="tipo" placeholder="" class="form-control input-md" required="" type="text" maxlength="100" >
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-md-2 control-label" for="Nome">Descrição<h11>*</h11></label>  
                  <div class="col-md-9">
                    <input id="descricao" name="descricao" placeholder="" class="form-control input-md" required="" type="text" maxlength="50" >
                  </div>
                </div>

                <!-- Prepended text-->
                <div class="form-group">
                  <label class="col-md-2 control-label" for="prependedtext">Email do Doador<h11>*</h11></label>
                    <div class="col-md-5">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="prependedtext" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                      </div>
                    </div>
                                    
                </div> 
                <!-- Search input-->
                <div class="form-group">
                <label class="col-md-2 control-label" for="prependedtext">Telefone do Doador<h11>*</h11></label>
                  <div class="col-md-3">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                      <input id="prependedtext" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="12" pattern="[0-9]{2}[0-9]{5}[-]{1}[0-9]{4}"
                    OnKeyPress="formatar('#######-####', this)">
                    </div>
                  </div>    
                </div>
                <!-- Button (Double) -->
              <div class="form-group">
                <label class="col-md-2 control-label" for="Cadastrar"></label>
                <div class="col-md-8">
                    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
                </div>
              </div>
            
                <div id="mensagemDiv"></div>
            </div>
        </div>
      </fieldset>
    </form>
  </div>
</div><br><br>
<?php
    include_once("footer.php");
?>
</body>
</html>
<?php
//se o usuario nao estiver logado eu redireciono ele
}else {
    header('Location: login.php');
    session_destroy();
  } 
?>