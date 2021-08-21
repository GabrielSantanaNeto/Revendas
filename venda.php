<?php
    require 'config.php';
    require 'header.php';

    $lista = [];
    $sql = $pdo->query("SELECT * FROM venda");

    if($sql->rowCount() > 0){
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="sidebar">
        <a href="cadastrarVenda.php"><img src="images/novoVenda.png" alt=""><br> Novo </a>
    </div><!-- sidebar-->

    <div class="consulta">
        <h3>Minhas Vendas</h3>
        <table>
            <tr class="th">
            <th>idVenda</th>
            <th>refProduto</th>
            <th>idCliente</th>
            <th>dataVenda</th>
            <th>precoTotal</th>
            <th>prazoPagamento</th>
            <th>formaPagamento</th>
            <th>totalPago</th>
            <th></th>

            
             
            </tr>
            <?php foreach($lista as $Venda){?>
            
                <tr>
                    <td> <?= $Venda['idVenda']  ?> </td>
                    <td> <?= $Venda['refProduto']  ?> </td>
                    <td> <?= $Venda['idCliente']  ?> </td>
                    <td> <?= $Venda['dataVenda']  ?> </td>
                    <td> <?= $Venda['precoTotal']  ?> </td>
                    <td> <?= $Venda['prazoPagamento']  ?> </td>
                    <td> <?= $Venda['formaPagamento']  ?> </td>
                    <td> <?= $Venda['totalPago']  ?> </td>

                    <td><a href="editarVenda.php?idVenda=<?= $Venda['idVenda']  ?>"><img src="images/editarArquivo.png" width="30px" alt=""></a></td>
                    
                </tr>

            <?php }  ?>

    </table>

    </div><!--consulta-->
    

</body>
</html>