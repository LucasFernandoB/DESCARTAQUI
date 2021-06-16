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
                url:"../Controller/insereDoador.php",
                data:dados_form,
                success: function(responseData){
                    $("#mensagemDiv").html(""+responseData);
                    document.getElementById('senha').value = "";
                    document.getElementById('nome').value = "";
                    document.getElementById('telefone').value = "";
                    document.getElementById('email').value = "";
                    document.getElementById('cep').value = "";
                    document.getElementById('rua').value = "";
                    document.getElementById('numero').value = ""
                    document.getElementById('bairro').value = "";
                    document.getElementById('cidade').value = "";
                    document.getElementById('estado').value = "";
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
    <form class="form-horizontal" id="meuform" method="post"><br>
      <fieldset>
          <div class="panel panel-primary">
            <div class="panel-heading" id="alinhamentoCentro">Cadastro de Doador</div>
               <div class="panel-body">
              <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
                    <div class="col-md-9">
                      <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                    </div>
                  </div>

                  <!-- Text input-->
                

              <!-- Prepended text-->
              <div class="form-group">
                <label class="col-md-2 control-label" for="prependedtext">Email <h11>*</h11></label>
                <div class="col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input id="email" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                  </div>
                </div>
                <label class="col-md-1 control-label" for="prependedtext">Senha <h11>*</h11></label>
                <div class="col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input  type="password" class="form-control" id = "senha" name="senha" placeholder="Password" required="">
                  </div>
                </div>
              </div>
              <!-- Prepended text-->
              <div class="form-group">
                <label class="col-md-2 control-label" for="prependedtext">Telefone <h11>*</h11></label>
                <div class="col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input id="telefone" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="12" pattern="[0-9]{2}[0-9]{5}[-]{1}[0-9]{4}"
                    OnKeyPress="formatar('#######-####', this)">
                  </div>
                </div>

              <!-- Search input-->
              <div class="form-group">
                <label class="col-md-1 control-label" for="CEP">CEP <h11>*</h11></label>
                <div class="col-md-2">
                  <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                  </div>
              </div>

              <!-- Prepended text-->
              <div class="form-group">
                <label class="col-md-2 control-label" for="prependedtext">Endereço<h11>*</h11></label>
                <div class="col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">Rua</span>
                    <input id="rua" name="rua" class="form-control" placeholder="" required="" type="text">
                  </div>
                  
                </div>
                  <div class="col-md-2">
                  <div class="input-group">
                    <span class="input-group-addon">Nº</span>
                    <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text">
                  </div>
                  
                </div>
                
                <div class="col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon">Bairro</span>
                    <input id="bairro" name="bairro" class="form-control" placeholder="" required="" type="text">
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label" for="prependedtext"></label>
                <div class="col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">Cidade</span>
                    <input id="cidade" name="cidade" class="form-control" placeholder="" required="" type="text">
                  </div>
                  
                </div>
                
                 <div class="col-md-2">
                  <div class="input-group">
                    <span class="input-group-addon">Estado</span>
                    <input id="estado" name="estado" class="form-control" placeholder="" required="" type="text">
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