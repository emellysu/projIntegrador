<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="icon" href="favicon.ico">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title> Ara </title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/business-frontpage.css" rel="stylesheet">

    </head>

    <body
        background-color="White">

        <!-- Navigation -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="menu.html">Início</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

    <center>

        <b><h1>Montagem</h1></b> <br>   </center>

    <div class="card text-center">
        <div class="card-body">
            <p class="card-text">
                Iniciamos a montagem do projeto utilizando o Arduino e dois LED. O LED vermelho foi utilizado para medir a temperatura, caso ela esteja alta, e o LED verde ficará ligado quando a temperatura estiver ambiente.
                Para testarmos se o projeto iria ligar aquecermos o LM35 até a temperatura desejada e esperamos que o cooler ligasse e depois desligasse quando chegasse à temperatura ambiente.
                O nosso circuito se baseia no arduino para direcionar os comandos para as outras partes do circuito e ler as mensagens enviadas para o mesmo. Utilizamos uma das entradas analógicas do Arduino para fazer a leitura do valor enviado ao LM35 (sensor de temperatura).
                Com a leitura realizada pelo pino do arduino, utilizamos um display (LCD 16x2) que imprime a temperatura do ambiente. O potenciômetro foi colocado para que possamos controlar o brilho do display.
                Colocamos dois LED’s, o vermelho para que indique que a temperatura está alta, que foi conectada ao pino digital de entrada do arduino. Assim como o verde, que indica que a temperatura está adequada.
                O módulo relé será usado para chavear o circuito, quando a temperatura se elevar o cooler será ligado juntamente com o LED vermelho, quando a mesma se apagar, o cooler irá se desligar junto com o LED indicando que a temperatura voltou a ser ideal para o local. Todos os comandos foram feitos com linhas de comandos (códigos), incluindo o acionamento do módulo relé.
                O cooler será alimentado por uma bateria externa de 9 Volts, podendo ser uma fonte de tensão. O cooler poderá ser substituído por um ventilador de 220 Volts, basta apenas usar a entrada da tomada ao invés da bateria

            </p>
            <a href="imagens.php" <button type="button" class="btn btn-dark">Finalizado</a>
            <a href="hardware.php" <button type="button" class="btn btn-dark">Voltar</a>

        </div>

    </div>

    <br><br><br> <br><br><br> <br><br><br>  <br><br><br> <br><br><br>

    <footer class="py-4 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Escola Técnica Redentorista &copy; Your Website 2018</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>