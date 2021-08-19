<?php
    require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area inicial</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="cliente.php">Clientes</a>
            <a href="produto.php">Produtos</a>
            <a href="venda.php">Vendas</a>
        </nav>
    </header>














    <a href="cadastrarCliente.php">Cadastrar Cliente</a><br><br>
    <a href="cadastrarProduto.php">Cadastrar Produto</a><br><br>
    <br>
    <span>Para cadastrar uma venda é necessário que o cliente e o produto já estejam cadastrados</span>
    <br>
    <a href="cadastrarVenda.php">Cadastrar Venda</a>
    <?php
        
    ?>
</body>
</html>