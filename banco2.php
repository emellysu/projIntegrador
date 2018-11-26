<?php


// incluindo a autenticacao
include "banco1.php";

// Selecionar as variaveis
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


// código SQL
$sql = "INSERT INTO cadastro (nome, data_nascimento, email, telefone, usuario, senha )VALUES ('$nome', '$data_nascimento', '$email', '$telefone', '$usuario', '$senha')"; 

// Executando o código SQL
if (mysqli_query($conn, $sql)) {
    echo " cadastrado com sucesso! <br>";
} else {
    echo "Erro ao executar o código: " . $sql . "<br>" . mysqli_error($conn);
}
// Fechando a conexão com o banco de dados
mysqli_close($conn);

?>
