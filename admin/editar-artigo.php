<?php

    require '../config.php';
    include '../src/Artigo.php';
    require '../src/redireciona.php';
    
    // Só será executado após o metodo POST ser enviado no formulário desa página
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $artigo = new Artigo($mysql);
        $artigo->editar($_POST['id'], $_POST['titulo'], $_POST['conteudo']);

        redireciona('index.php');
    }

    $artigo = new Artigo($mysql);
    $art = $artigo->encontrarPorId($_GET['id']);

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

            <h3>Editar Artigo</h3>

            <div class="artigo bg-light p-3 mb-2">
                <form class="form-group" action="editar-artigo.php" method="POST">
                    <label class="" for="">Titulo</label>
                    <input class="form-control" name="titulo" type="text" value="<?php echo $art['titulo']; ?>">
                    <br>
                    <label for="">Artigo</label>
                    <textarea class="form-control" name="conteudo" id="" cols="30" rows="4"><?php echo $art['conteudo']; ?></textarea>
                    <input type="hidden" name="id" value="<?php echo $art['id']; ?>">
                    <br>
                    <button class="btn btn-info" type="submit">Confirmar</button>
                </form>
            </div>

       
    </div>
</body>
</html>