<?php


// incluindo a autenticacao
include "banco1.php";

// Selecionar as variaveis
$nome = $_POST['nome'];
$material = $_POST['material'];
$nivel = $_POST['nivel'];
$descricao = $_POST['descricao'];

// código SQL
$sql = "INSERT INTO enviar (nome, material, nivel, descricao )VALUES ('$nome', '$material', '$nivel', '$descricao')"; 

// Executando o código SQL
if (mysqli_query($conn, $sql)) {
    echo " enviado com sucesso! <br>";
} else {
    echo "Erro ao executar o código: " . $sql . "<br>" . mysqli_error($conn);
}
// Fechando a conexão com o banco de dados
mysqli_close($conn);

?>
