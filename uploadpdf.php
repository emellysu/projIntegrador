<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $target_diretorio = "uploadspdf/";
        $target_arquivo = $target_diretorio . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_arquivo, PATHINFO_EXTENSION));

// Verifica se o arquivo é de fato uma imagem
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
            
}

        
if (file_exists($target_arquivo)) {
	echo "Erro! este arquivo já existe";
	$uploadOk = 0;
            }
            


        if ($uploadOk == 0) {
            echo "Erro! Esse arquivo não é suportado";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_arquivo)) {
                echo "O arquivo " . basename($_FILES["fileToUpload"]["name"]) . " foi adicionado com sucesso .";
            } else {
                echo "Erro no upload doarquivo.";
            }
        }
        
        
// Verificando os formatos



        ?>
    </body>
</html>
