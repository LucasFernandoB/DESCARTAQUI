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

  <!-- pasta localizada dentro do projeto com as estilizacoes-->
  <link rel="stylesheet" href="../css/estilo.css"/>
  <script type="text/javascript" src="../java/javascript.js"></script>

  <!-- script com o ajax pra inserir no banco-->
  <script rsc="text/javascript">
    $(function() {
        $("#meuform").submit(function(event){
            event.preventDefault();

            var dados_form = $(this).serialize();
           
            $.ajax({
                type:"post",
                url:"inserecontato.php",
                data:dados_form,
                success: function(responseData){
                    $("#mensagemDiv").html(""+responseData);
                    document.getElementById('nome').value = "";
                    document.getElementById('email').value = "";
                    document.getElementById('telefone').value = "";
                    document.getElementById('mensagem').value = "";
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
  <div class="linha"><br>
  Para enviar sugestões, críticas ou elogios, preencha o formulário abaixo,ou fale com a nossa central de atendimento, através do telefone a seguir:
  <div class="coluna col5"><br><br>
    <form action="inserecontato.php" method="POST" id="meuform">
      <div class="form-group">
        <label for="nome" class="sr-only">NOME*</label>
        <i class="far fa-user"></i><input class="form-control" required="" type="text" name="nome" id="nome" placeholder="Nome" maxlength="50">  
      </div>      

      <div class="form-group">
        <label for="email" class="sr-only">EMAIL*</label>
          <i class="far fa-envelope"><input id="email" name="email" class="form-control" placeholder="Email" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
      </div>

      <div class="form-group">
        <label for="telefone" class="sr-only">TELEFONE*</label>
        <i class="fas fa-phone-alt"></i> <input id="telefone" name="telefone" class="form-control" placeholder="Telefone" required="" type="text" maxlength="12" pattern="[0-9]{2}[0-9]{5}[-]{1}[0-9]{4}"
                    OnKeyPress="formatar('#######-####', this)">
      </div>

      <div class="form-group">
        <label for="mensagem" class="sr-only">MENSAGEM</label>
        <i class="fas fa-pencil-alt"></i><textarea class="form-control" rows="3" cols="30" name="mensagem" id="mensagem" placeholder="Mensagem" maxlength="200" required=""></textarea>
      </div>

      <div id="mensagemDiv"></div> 
     <center><button class="submit-btn btn-info">ENVIAR MENSAGENS</button></center>
    </form>
  </div>
  <div class="coluna col4"><br><br>
    <div class="formas">
      <svg xmlns="http://www.w3.org/2000/svg" width="66" height="65" viewBox="0 0 66 65"><g transform="translate(-1019 -629)"><rect width="66" height="65" rx="32.5" transform="translate(1019 629)" fill="#007631"></rect><g transform="translate(683 397)"><path d="M377.4,259.2c0,6.013-8.2,10.387-8.2,15.853,0-5.467-8.2-9.84-8.2-15.853a8.2,8.2,0,0,1,16.4,0Z" fill="none" stroke="#98bf11" stroke-linejoin="round" stroke-width="2"></path><circle cx="2.733" cy="2.733" r="2.733" transform="translate(366.467 256.467)" fill="none" stroke="#98bf11" stroke-linejoin="round" stroke-width="2"></circle><path d="M367.269,291c-2.511.44-4.269,1.443-4.269,2.613,0,1.576,3.182,2.854,7.107,2.854s7.107-1.278,7.107-2.854c0-1.17-1.758-2.173-4.269-2.613" transform="translate(-0.907 -18.133)" fill="none" stroke="#98bf11" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></g></g></svg>

      <span>Av 15 De Novembro 38, MG</span>
    </div>
    <div class="formas">
      <svg xmlns="http://www.w3.org/2000/svg" width="66" height="65" viewBox="0 0 66 65"><g transform="translate(-1019 -559)"><rect width="66" height="65" rx="32.5" transform="translate(1019 559)" fill="#007631"></rect><g transform="translate(999.398 536.399)"><path d="M65.1,65.6h-25a2.5,2.5,0,0,1-2.5-2.5v-15a2.5,2.5,0,0,1,2.5-2.5h25a2.5,2.5,0,0,1,2.5,2.5v15A2.5,2.5,0,0,1,65.1,65.6Zm-25-18.75a1.251,1.251,0,0,0-1.25,1.25v15a1.251,1.251,0,0,0,1.25,1.25h25a1.251,1.251,0,0,0,1.25-1.25v-15a1.251,1.251,0,0,0-1.25-1.25Z" fill="#98bf11"></path><path d="M66.516,49.913a.624.624,0,0,0-.854-.228L54.1,56.378,42.539,49.684a.625.625,0,1,0-.626,1.082l11.875,6.875h0a.643.643,0,0,0,.119.05.631.631,0,0,0,.191.034h0a.627.627,0,0,0,.19-.034.649.649,0,0,0,.12-.05h0l11.875-6.875A.624.624,0,0,0,66.516,49.913Z" transform="translate(-1.5 -1.5)" fill="#98bf11"></path></g></g></svg>
      
      <span>contato@descartaqui.org.br</span>
            
    </div>
    <div class="formas">
        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="65" viewBox="0 0 66 65"><g transform="translate(-1019 -489)"><rect width="66" height="65" rx="32.5" transform="translate(1019 489)" fill="#007631"></rect><g transform="translate(999.054 383.796)"><path d="M60.224,148.866l-3.883-2.847a2.073,2.073,0,0,0-2.551.2l-1.253,1.253a.813.813,0,0,1-.566.218h0a.723.723,0,0,1-.44-.138,37,37,0,0,1-6.589-6.589.806.806,0,0,1,.081-1.005l1.252-1.252a2.006,2.006,0,0,0,.2-2.554l-2.847-3.881a2.094,2.094,0,0,0-1.691-.889,2.122,2.122,0,0,0-1.5.645l-2.087,2.087c-1.084,1.083-.965,3.16.336,5.848a30.976,30.976,0,0,0,5.926,7.927c4.253,4.253,8.857,7,11.729,7a2.777,2.777,0,0,0,2.046-.74l2.087-2.087a2.062,2.062,0,0,0-.244-3.193Zm-.591,2.358-2.087,2.087a1.655,1.655,0,0,1-1.211.394c-2.5,0-6.975-2.737-10.894-6.655a29.783,29.783,0,0,1-5.7-7.606c-1.034-2.137-1.244-3.818-.564-4.5l2.087-2.087a.938.938,0,0,1,.667-.3.916.916,0,0,1,.74.407l2.847,3.881a.835.835,0,0,1-.079,1.021l-1.252,1.252a2,2,0,0,0-.182,2.561,38.193,38.193,0,0,0,6.8,6.8,1.905,1.905,0,0,0,1.159.383h0a1.988,1.988,0,0,0,1.4-.564l1.253-1.253a.863.863,0,0,1,1.019-.078l3.882,2.847a.885.885,0,0,1,.107,1.406Z" transform="translate(0 -3.349)" fill="#98bf11"></path><path d="M68.3,141.555a.587.587,0,0,0,.723-.418,4.726,4.726,0,0,0-5.781-5.782.59.59,0,0,0,.3,1.141,3.545,3.545,0,0,1,4.337,4.336A.59.59,0,0,0,68.3,141.555Z" transform="translate(-10.319 -4.914)" fill="#98bf11"></path><path d="M61.687,129.481a.59.59,0,1,0,.306,1.14,7.081,7.081,0,0,1,8.669,8.669.591.591,0,0,0,.417.723.6.6,0,0,0,.153.02.591.591,0,0,0,.57-.437,8.262,8.262,0,0,0-10.115-10.115Z" transform="translate(-9.685 -2.457)" fill="#98bf11"></path><path d="M71.536,126.659A11.83,11.83,0,0,0,60.147,123.6a.59.59,0,1,0,.3,1.141,10.623,10.623,0,0,1,13,13,.59.59,0,1,0,1.141.3A11.836,11.836,0,0,0,71.536,126.659Z" transform="translate(-9.053 0)" fill="#98bf11"></path><path d="M63.948,141.543a1.18,1.18,0,1,0,1.671,0A1.179,1.179,0,0,0,63.948,141.543Z" transform="translate(-10.648 -7.371)" fill="#98bf11"></path></g></g></svg>
            
            <span>34  <strong><big>3842-2001</big></strong></span>
    </div>
  </div>
  <div class="coluna col3"><br><br>
    <img src="../img/lixo1.png" alt="">
  </div>
</div>
</div>

<div class="container" ><br><br>
  <div class="coluna col8"><br><br>
    <img src="../img/ti.jpg" alt="">
  </div>
  <div class="coluna col5" id="alinhamentoCentro"><br><br>
    <div class="textoImagem">Missão:</div>
    Fazer do resíduo eletroeletrônico de hoje a matéria prima para o equipamento de amanhã. Garantir que os benefícios do uso da tecnologia sejam desfrutados sem a preocupação de impactar o meio ambiente

   <div class="textoImagem"> Visão:</div>
    Criar e operar o ecossistema de reciclagem mais integrado e eficiente do mundo para a indústria eletroeletrônica. Gerar valor viabilizando a sustentabilidade através de um sólido conhecimento da cadeia produtiva, pesquisa e uma busca constante pela inovação e excelência empresarial.
  </div>
</div><br><br>
<?php
    include_once("footer.php");
?>
</body>
</html>


