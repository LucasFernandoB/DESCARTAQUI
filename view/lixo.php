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
  
</head>
<body>

<!--parte do menu com as opcoes -->
<?php
      include_once("navebar.php");
  ?>
 
   <!--conteudo da pagina com texto descrevendo a empresa--> 
  <div class="container" align="justify">
    <div class="linha">
      <div class="coluna col8"><br>
        <div class="textoImagem">PROJETO VIVER BEM</div><br>
        As necessidades em atender a crescente demanda no tratamento adequado dos resíduos sólidos, faz com que, toda a sociedade se mobilize em promover a sustentabilidade.

        Para essa demanda que a DescartAQUI nasceu em prol do meio ambiente, oferecendo soluções para o tratamento e correta destinação dos resíduos sólidos. O método utilizado garante que suas ações resultem na agregação de valor, e  conseqüentemente na geração renda, proporcionado inclusão social, econômica e minimizando os impactos ambientais, desta forma o maior objetivo da Nova Recicle é torna o mundo um lugar mais sustentável.

        A Nova Recicle é licenciada pela Secretaria Estadual do Meio Ambiente (CETESB) e pelo Instituto Brasileiro do Meio Ambiente e dos Recursos Naturais Renováveis (IBAMA)
     
        <br><br><li> Coleta em todo território nacional.</li>
        <li>Destruição de dados.</li>
        <li>Descaracterização do material obsoleto.</li>
        <li>Terceirização de logística reversa para fabricantes, importadores e grandes consumidores.</li>
        <li>Recuperação, reaproveitamento e reintrodução no ciclo produtivo, através da reciclagem.</li>
        <li>Disposição final dos rejeitos.</li>   
      </div>
      <div class="coluna col4"><br>
        <img src="../img/lixo.png" alt="">
      </div>            
    </div>
  </div>

  <!--conteudo da pagina com texto descrevendo a reciclagem com imagens -->
  <div class="container">
    <div class="linha" id="alinhamentoCentro"><br><br>
      <div class="coluna col4"><br>
        <img src="../img/li.png" alt="">
        <div class="textoImagem">RECICLAGEM DO MATERIAL</div>
        Após o processo de manufatura reversa, encaminhamos todos os materiais para
         empresas especializadas em reciclagem de resíduos eletrônicos, de acordo com
          todas as leis ambientais.
      </div>
      <div class="coluna col4"><br>
        <img src="../img/pc.png" alt="">
         <div class="textoImagem">COLETA DE LIXO ELETRÔNICO</div>
         No ato da coleta, sua empresa ou indústria será documentada com:
          carta de doação, termo de confidencialidade e termo de destinação responsável.
      </div> 
      <div class="coluna col4"><br>
        <img src="../img/ca.png" alt="">
         <div class="textoImagem">MANUFATURA REVERSA</div>
         O material chega até nossos depósitos, nossa equipe inicia o processo 
         de manufatura reversa, separando todos os componentes para serem encaminhados
          à reciclagem.
      </div>  
    </div>
  </div><br><br>
<?php
    include_once("footer.php");
?>
</body>
</html>