<?php

    include './src/Artigo.php';
    require './config.php'; 

    $artigo = new Artigo($mysql);
    $artigos = $artigo->exibeArtigos();

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
        <h1>Artigos do Blog</h1>

        <?php foreach($artigos as $artigo): ?>

            <div class="artigo bg-light p-3 mb-2">
                <a href="artigo.php?id=<?php echo $artigo['id'] ?>"> 
                    <h2"> <?php echo $artigo['titulo'] ?> </h2> 
                </a>
                <p> <?php echo nl2br($artigo['conteudo']) ?> </p>
            </div>

        <?php endforeach; ?>

       
    </div>
</body>
</html>