<!--eu inicio e destuo a sessao por q quando o usuario sai da pagina do administrador  eu destruo ela-->
<?php 
  session_start();
  session_destroy();
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
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" href="css/loguin.css"/>
  <script type="text/javascript" src="java/javascript.js"></script>
  <!--link pro css qu esta na pagina -->
  <link rel="stylesheet" href="css/estilo.css"/>
  <!--script da chamada do ajax pra ver se o usuario tem acesso-->
  <script rsc="text/javascript">
    $(function() {
        $("#meuformlogin").submit(function(event){
            event.preventDefault();

            var dados_form = $(this).serialize();

            $.ajax({
                type:"post",
                url:"../controller/fazerLoginDoador.php",
                data:dados_form,
                success: function(responseData){
                    alert(responseData);
                    if(responseData ==1)
                        window.location ="cadastroLixo.php";
                    else 
                      $("#mensagemDiv").html(""+responseData);
                },
                error: function(request,status,error){
                    $("#mensagemDiv").html(""+responseText);
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
 
 <!--conteudo da pagina, com a parte do login responsivel --> 
<div class="container"><br><br>
  <div class="coluna col10">
    <div class="container">
    <div class="omb_login">

    <div class="row omb_row-sm-offset-3 omb_loginOr">
      <div class="col-xs-12 col-sm-6">
        <hr class="omb_hrOr">
        <span class="omb_spanOr">ENTRAR</span>
      </div>
    </div>

    <div class="row omb_row-sm-offset-3">
      <div class="col-xs-12 col-sm-6">  
          <form class="omb_loginForm" action="" autocomplete="off" method="POST" id="meuformlogin">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" name="email" placeholder="email address" required="">
          </div>
          <span class="help-block"></span>
                    
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input  type="password" class="form-control" name="senha" placeholder="Password" required="">
          </div>
            <span class="help-block" id="mensagemDiv" ></span>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>  
      </div>
      </div>
      
  </div>
</div>
</div>         
</div>
<br><br><br><br>
<?php
    include_once("footer.php");
?>
</body>
</html>