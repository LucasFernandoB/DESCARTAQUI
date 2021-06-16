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
   
</head>
<body >


<!--parte do menu com as opcoes -->
<?php
      include_once("navebar.php");
  ?>
 
 <!--conteudo da pagina --> 
<div class="container">
  <div class="coluna col8 " align="justify">
      <div class="subtitulo" >O PROJETO</div>
      O projeto existe desde 2020 e nasceu da necessidade de fazer o descarte correto de materiais eletrônicos inutilizados e de reaproveitar os que ainda estiverem em bom estado. O descarte correto traz muitos impactos positivos para a sociedade e para o meio ambiente, impedindo que estes materiais venham a poluir o solo e lençóis freáticos, evitando males aos animais e aos seres humanos.
      Como o descarte desse tipo de lixo aumenta a cada ano, é muito importante agir de forma sustentável, prolongando a vida útil de materiais que ainda estejam em bom estado
      <div class="coluna col4 "><br><br><br>
        <div class="textoImagem">O que recolhemos?</div>
            Recebemos equipamento de informática e também pilhas, baterias, celulares, eletroeletrônicos, eletrodomésticos, televisores e brinquedos eletrônicos. Só não coletamos lâmpadas fluorescentes.
      </div>
      <div class="coluna col4 "><br><br>
       <div class="textoImagem"> O que e lixo eletrônico?</div>
        O lixo eletrônico é focado no descarte de eletrônicos sem utilidade. Este descarte é feito quando o equipamento apresenta defeito ou torna-se muito antiquado.
      </div>
  </div>
      <div class="coluna col4">
              <img src="../img/robo.png">
      </div>
</div><br><br>

 <!-- parte com a imagem de reciclagem e a descricao-->
<div class="container">
  <div class="linha" id="lucas">
            <div class="coluna col3">
               <img src="../img/lixo.png">            
             </div>
            <div class="coluna col7" ><br>
              <div class="subtitulo"><h4>COMO REAPROVEITARMOS E DAMOS<br> DESTINO AO NOSSO LIXO?</h4></div>
            <h4 class="textoImagem">Bom estado</h4>
              <li> Doação para escolas, entidades assistenciais;</li>
              <li>Reaproveitamento de peças eletrônicas em feiras.</li>
             <h4 class="textoImagem">Mau estado</h4>
             <li>Descarte junto a empresas especializadas no segmento.</li>
            </div>
         </div>
</div>
<?php
    include_once("footer.php");
?>
</body>
</html>