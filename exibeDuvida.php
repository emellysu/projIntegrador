<head>
    <meta charset="UTF-8"> 
    <title>Exibe</title>
    <link rel="icon" href="favicon .ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
</head>
<body >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="exibirUsuarios.php">Inicial</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
 <li class="nav-item">
                     <a class="nav-link" href="organizadores.php">Organizadores</a>
            </li>
             <li class="nav-item">
                 <a class="nav-link" href="exibeProjetos.php">Projetos</a>
            </li>
            
             <li class="nav-item">
                 <a class="nav-link" href="exibeDuvida.php">Duvidas</a>
            </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
<center>  
    <?php
// incluindo a autenticacao
    include "banco1.php";
// Selecionar as variaveis
    $sql = "SELECT `id`, `comente` FROM `duvidas` WHERE 1";
    $result = mysqli_query($conn, $sql);

    echo "<table border=1> 
     <H1>Duvidas em espera: </H1>
                   <table border=1>
                   <tr>
               
                   <th>Duvida</th>
                  
                   </tr>";

// É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
    if (mysqli_num_rows($result) > 0) {
        // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
        while ($row = mysqli_fetch_assoc($result)) {
            //A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
            echo "<tr>
                     
                      <td> " . $row["comente"] . "</td> 
                          
                         
                       
                         
                      </tr>
                      ";
        }
    } else {
        echo "A tabela está vazia";
    }


    echo "</table>";


    mysqli_close($conn);
    ?>
</center>
</body>