<?php
    require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Venda</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="formulario">
        <h2>Cadastrar Venda</h2>
        <form action="cadastrarVendaBanco.php" method="POST">
    
            <input class="form-input" type="number" name="refProduto" placeholder="Referencia do produto"><br><br>
            <input class="form-input" type="number" name="idCliente" placeholder="Identificador do cliente"><br><br>
            <label  for="">Data da Venda</label><br>
                <input class="form-input" type="date" name="dataVenda" ><br><br>
            <input class="form-input" type="text" name="precoTotal" placeholder="Preço Total"><br><br>
            <label for="">Prazo para pagamento</label><br>
                <input class="form-input" type="date" name="prazoPagamento" ><br><br>
            <label for="">Forma de pagamento</label><br>
                <input class="form-input radio" type="radio" name="formaPagamento" value="A vista"><label for="">A vista</label><br>
            <input class="form-input radio" type="radio" name="formaPagamento" value="A prazo"><label for="">A prazo</label><br><br>
            <input class="form-input" type="text" name="totalPago" placeholder="Total Pago"><br><br>
            
            <input class="form-input" type="submit" value="Cadastrar"><br><br>
        </form>
    </div> <!--Formulario-->   
</body>
</html>