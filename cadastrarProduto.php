<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
</head>
<body>
    <h2>Cadastro de Produto</h2>
    <form action="cadastrarProdutoBanco.php" method="POST">
        <input type="text" name="refProduto" placeholder="Referencia do produto"><br><br>
        <input type="text" name="descricao" placeholder="Descrição"><br><br>
        <input type="number" name="quantidade" placeholder="Quantidade"><br><br>
        <input type="text" name="precoUnitario" placeholder="Preço Unitário"><br><br>
        <input type="date" name="dataEntrada" placeholder="Data de Endrada"><br><br>
        <input type="date" name="dataSaida" placeholder="Data de Saída"><br><br>
        <input type="submit" value="Cadastrar"><br><br>
    </form>
</body>
</html>

<?php


?>