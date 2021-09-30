<?php

    include '../src/Artigo.php';
    require '../config.php'; 

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
    <div class="container bg-light border p-3">
        <h1>Admin</h1>

            <?php foreach ($artigos as $art) { ?>
                <div class="row mt-2">
                    <div class="col-md-6 m-1">
                        <h5><a href="http://localhost/Blog_com_MySQL/artigo.php?id=<?php echo $art['id'] ?>"> <?php echo $art['titulo'];  ?> </a></h5>
                    </div>
                    <div class="col-md-1 m-1"> <a class="btn btn-info" href="http://localhost/Blog_com_MySQL/admin/editar-artigo.php?id=<?php echo $art['id']; ?>">Editar</a> </div>
                    <div class="col-md-1 m-1"> <a class="btn btn-danger" href="http://localhost/Blog_com_MySQL/admin/excluir-artigo.php?id=<?php echo $art['id']; ?>">Excluir</a> </div>
                </div>
            <?php } ?>


            <div class="row mt-5">
                <div class="col-md-8">
                    <a class="btn btn-success" href="./adicionar-artigo.php">Adicionar artigo</a>
                </div>
            </div>

            <!-- <div class="artigo bg-light p-3 mb-2">
                <form class="form-group" action="adicionar-artigo.php" method="POST">
                    <label class="" for="">Titulo</label>
                    <input class="form-control" name="titulo" type="text">
                    <br>
                    <label for="">Artigo</label>
                    <textarea class="form-control" name="conteudo" id="" cols="30" rows="4"></textarea>
                    <br>
                    <button class="btn btn-info" type="submit">Adicionar</button>
                </form>
            </div> -->

       
    </div>
</body>
</html>