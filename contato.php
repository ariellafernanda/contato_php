<?php
if(isset ($_GET[ "bt_nome"])){
    $nome = $_GET ["bt_nome"];
    $gmail = $_GET ["bt_gmail"];
    $mensagem = $_GET["bt_mensagem"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Contato</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
<div class=" conteiner text-center"> 
<h1>Atividade - Página de Contato</h1>
</div>
<div class="container">
        <form action="" method= "get">
            <label for="">Nome</label>
            <input class="form-control" type= "text" name= "bt_nome">
            <label for="">Gmail</label>
            <input class="form-control" type= "text" name= "bt_gmail">
            <label for="">Mensagem</label>
            <input class="form-control"  type= "text" name= "bt_mensagem">
          
           

            <input  class="btn btn-success" type="submit">
            <input  class="btn btn-danger"  type="reset">
            
        </form>



</body>
</html>