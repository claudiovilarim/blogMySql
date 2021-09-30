<?php

    require '../config.php';
    require '../src/Artigo.php';
    require '../src/redireciona.php';

    //  Só executa se o método passado for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $artigo = new Artigo($mysql);
        $artigo->adicionar($_POST['titulo'], $_POST['conteudo']);
        
        redireciona('index.php');

    }

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

            <div class="artigo bg-light p-3 mb-2">
                <form class="form-group" action="adicionar-artigo.php" method="POST">
                    <label class="" for="">Titulo</label>
                    <input class="form-control" name="titulo" type="text">
                    <br>
                    <label for="">Artigo</label>
                    <textarea class="form-control" name="conteudo" id="" cols="30" rows="4"></textarea>
                    <br>
                    <button class="btn btn-info" type="submit">Adicionar</button>
                </form>
            </div>

       
    </div>
</body>
</html>