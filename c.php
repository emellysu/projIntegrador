<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="icon" href="favicon.ico">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


        <style type="text/css">
            header.masthead {
                position: relative;

                background-size: cover;
                padding-top: 8rem;
                padding-bottom: 8rem;
            }

            header.masthead .overlay {
                position: absolute;

                height: 100%;
                width: 100%;
                top: 0;
                left: 0;
                opacity: 0.3;
            }

        </style>
        <title></title>
    </head>
    <body
        background="red.png" 
        >

        <body>
<br>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
          <a class="navbar-brand" href="menu.html">Início</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="menu.html">Menu
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                </div>
        </nav>

    </div>
</nav>

<!-- Formulário -->
<header class="masthead text-white text-center">
    <div class="container">
        <div class="row" name="login" action="" method="POST">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Por favor, insira seu Projeto:</h3>
                        <font color="black"><h6>Lembre-se de nomear os arquivos com o nome do projeto para facilitar para nossa equipe!</h6></font>
<br>
                    </div>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        Por favor, selecione a foto do seu projeto:
                        <input type="file" name="fileToUpload" class="btn btn-block btn-lg btn-primary" id="fileToUpload">
                      
                        <input type="submit" class="btn btn-block btn-lg btn-primary" name="Enviar foto">
                    </form>
                    
                    
                    <form action="uploadpdf.php" method="post" enctype="multipart/form-data">
                        Selecione seu PDF:
                        <input type="file" name="fileToUpload" class="btn btn-block btn-lg btn-primary" id="fileToUpload">
                        <input type="submit" class="btn btn-block btn-lg btn-primary" name="Enviar PDF">
                    </form>
<br></br>
                    <div class="panel-body">
                        <form role="form" action="enviarS.php" method="post">
                            <fieldset>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Nome" name="nome" type="text" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Material" rows="3" name="material" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nivel" name="nivel" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Descreva seu Projeto(Passo a Passo): </label>
                                    <textarea class="form-control" rows="5" name="descricao" id="comment"></textarea>
                                </div>




                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-block btn-lg btn-primary">Enviar Projeto
                            </fieldset>

                    </div>
                </div>
            </div>
        </div>
    </div>


</header>  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>