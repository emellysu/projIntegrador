<!DOCTYPE html>
<html lang="en">

  <head>
   <link rel="icon" href="favicon.ico">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ARA</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">

  </head>
  
  <body
         background="img3.png">
      
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
          <a class="navbar-brand" href="Inicial.php">Inicial</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
 
 <br>
<div class="container">
  <!--
  -->
  <!--Progress Bar-->
  <!--Content-->
  <!--Question-->
  <!--Answers-->
  <!--Explaination-->
  
  
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width: 50%;">
      <span class="sr-only">50% Complete</span>
    </div>
  </div>
 <center> <font color="white">
      <h2> Responda este questionário para completar o cadastro...</h2>
      <h3> Escolha apenas uma opção por pergunta </h3></center> </font>
      <BR><BR>

        
         
    <form id="questionario" name ="questionario" method = "post" action="resposta.php">
        <h5><font color="white">1) Você tem acesso a internet?</h5>
    <p>
    <label>
    <input type="radio" name="questao1" value="a" /> A) SIM;</label>
    <br />
    <label>
    <input type="radio" name="questao1" value="b" /> B) NÃO;</label>
    <br />
    <br />

    <h5 class="font_1">2) Possui acesso a computadores e notebooks?</h5>

    <label>
    <input type="radio" name="questao2" value="a" /> A) SIM;</label>
    <br />
    <label>
    <input type="radio" name="questao2" value="b" /> B) NÃO;</label>
    <br />
    <br />

    <h5 class="font_1">3) Sabe o que é arduino?</h5>

    <label>
    <input type="radio" name="questao3" value="a" /> A) SIM;</label>
    <br />
    <label>
    <input type="radio" name="questao3" value="b" /> B) NÃO;</label>
    <br />
    <br />


    <h5 class="font_1">4)Tem algum projeto relacionado a tecnologia?</h5>

    <label>
    <input type="radio" name="questao4" value="a" /> A) SIM;</label>
    <br />
    <label>
    <input type="radio" name="questao4" value="b" /> B) NÃO;</label>
    <br />
    <br />

    <h5 class="font_1">5) Tem algum curso na área de informática(basica, avançada ou profissionalizante)?</h5>

    <label>
    <input type="radio" name="questao5" value="a" /> A) SIM;</label>
    <br />
    <label>
    <input type="radio" name="questao5" value="b" /> B) NÃO;</label>
    <br />
    <br />

    <h5 class="font_1">6) Sabe alguma línguagem de programação?</h5>

        <label>
    <input type="radio" name="questao6" value="a" /> A) SIM;</label>
        <br />
         <label>
    <input type="radio" name="questao6" value="b" /> B) NÃO;</label>
         <br />
    <br />
    </font>

    <center><button type="button" class="btn btn-light">Enviar</button></center>
    </form>
            </body>






    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    </html>

