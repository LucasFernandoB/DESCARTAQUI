<!--eu inicio inicio a sessao e vejo se o usuaio esta logado vindo do formulario ou se ele apenas mudou na url-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>DECARTAQUI</title>
  <meta charset="utf-8">

  <!-- link dos botstrap para a barra de menu responsivel-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!--link pro css qu esta na pagina -->
  <link rel="stylesheet" href="../css/estilo.css"/>

  <script rsc="text/javascript">
    $(function() {
            var dados_form = $(this).serialize();

            $.ajax({
                type:"post",
                url:"../Controller/listandoLixo.php",
                data:dados_form,
                success: function(responseData){
                  //pegando a tabela que veio do php
                  
                  var resultado = JSON.parse(responseData);
                  
                  //pegando o id da tabela
                  var tabela = $("#tabelalixo");
                  //esse for roda de acordo com a qauntidade de dados que veio do banco
                  for(i = 0; resultado.length; i++) {
                    //mostro da div os dados do banco
                    $novotr = $("<tr></tr>");
                    $caminhotd = $("<br><td><img  style='max-width:128px;max-height:150px;width: auto;height: auto;' src='" + resultado[i].caminho + "'></td>");
                    $tipotd = $("<td style='width: 50px;'>" + resultado[i].Tipo + "</td>");
                    $descricaotd = $("<td style='width: 50px;'>" + resultado[i].descricao + "</td>");
                    $doadortd = $("<td>" + resultado[i].Doador + "</td>");
                    $telefonetd = $("<td>" + resultado[i].Telefone + "</td>");
                    
                    $ruatd = $("<td>" + resultado[i].rua + "</td>");
                    $numerotd = $("<td><center>" + resultado[i].numero + "</center></td>");
                    $cidadetd = $("<td>" + resultado[i].cidade + "</td>");
                    $bairrotd = $("<td>" + resultado[i].bairro + "</td>");
                    $estadotd = $("<td><center>" + resultado[i].estado + "</center></td>");
                    //mostro na div
                    $novotr.append($caminhotd);
                    $novotr.append($tipotd);
                    $novotr.append($descricaotd);
                    $novotr.append($doadortd);
                    $novotr.append($telefonetd);
                    $novotr.append($ruatd);
                    $novotr.append($numerotd);
                    
                    $novotr.append($bairrotd);
                    $novotr.append($cidadetd);
                    $novotr.append($estadotd);
                    //carrego a tabela
                    $(tabela).append($novotr);
                  } 
                //se tiver retornado algum erro do banco de dados
                },
                error: function(request,status,error){
                    $("#mensagemDiv").html(""+responseText);
                }
            });
    });

</script>
</head>
<body>

  <!--parte do menu com as opcoes -->
  <?php
      include_once("navebar.php");
  ?>
<!-- parte do cabecalho-->
<div class="container" id="cabecalho"><br>
  <center>HISTÓRICO DOS ELETRÔNICOS CADASTRADOS </center>
  <br>   
</div><br><br>
 <!--conteudo da pagina --> 
  <div class="container" id="meuform">
     <center>
        <table id="tabelalixo" class="table">
        <thead>
        <tr>
          <th>IMAGEM</th>
          <th>Tipo</th>
          <th>DESCRICAO</th>
          <th>Doador </th>
          <th>Telefone</th>
          <th>RUA</th>
          <th>NUMERO</th>
          <th>BAIRRO</th>
          <th>CIDADE</th>
          <th>ESTADO</th>
        </tr>
      </thead>
      </table>
     </center>
        <div id="mensagemDiv">
         
          
        </div>
  </div><br><br>
<?php
    include_once("footer.php");
?>
</body>
</html>