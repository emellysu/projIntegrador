<?php


// incluindo a autenticacao
include "banco1.php";

// Selecionar as variaveis
$comente = $_POST['comente'];




// código SQL
$sql = "INSERT INTO duvidas (comente)VALUES ('$comente')"; 

// Executando o código SQL
if (mysqli_query($conn, $sql)) {
    echo " cadastrado com sucesso! <br>";
} else {
    echo "Erro ao executar o código: " . $sql . "<br>" . mysqli_error($conn);
}
// Fechando a conexão com o banco de dados
mysqli_close($conn);

?>

