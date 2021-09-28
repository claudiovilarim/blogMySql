<?php

    include './src/Artigo.php';
    require './config.php'; 

    $obj_artigo = new Artigo($mysql);
    $artigo = $obj_artigo->encontrarPorId($_GET['id']);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container bg-secondary p-3">
        
        <div class="artigo bg-light p-3 mb-2">
            <h2> <?php echo $artigo['titulo'] ?> </h2> 
            <p>  <?php echo $artigo['conteudo'] ?></p>

            <a class="btn btn-primary" href="index.php">Voltar</a>
        </div>
        
       
    </div>
</body>
</html>