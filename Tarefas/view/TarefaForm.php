<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <title>Document</title>

</head>
<body>

<div class="container">
    <div class="row" >
        <div class="col-10 m-3 center">
<form action="../control/TarefaController.php" method="post">
    <div class="mb-3">
        <label class form="label"      for="titulo"> Titulo da tarefa</label>
        <input class="form control" type="text" name="titulo">
    </div>
    <div>
    <div class="mb-3">
        <label class form="label"      for="descricao"> descrição</label>
        <input class="form control" type="text" name="descricao">
    </div>
    <div>
    <div>
    <div class="mb-3">
        <label class form="label"      for="prioridade"> Prioridade</label>
        <input class="form control" type="text" name="prioridade">
    </div>

    <div>
    <div class="mb-3">
        <label class form="label"      for="dataVencimento"> Data de vencimento</label>
        <input class="form control" type="text" name="dataVencimento">
    </div>
    </div>
    </div>
    </div>
         <input type="submit" class="btn btn-primary" value="Salvar" name="salvar">
</form>
</div>
</div>
</div>
<?php
class ConnectionFactory{
    static $connection;
}
?>
</body>
</html>