<?php
    require 'config.php';
    require 'header.php';

    $lista = [];
    $sql = $pdo->query("SELECT * FROM produto");

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
    <title>Produtos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="sidebar">
        <a href="cadastrarProduto.php"><img src="images/novoArquivo.png" alt=""><br> Novo </a>
    </div><!-- sidebar-->
    <h3>Meus Produtos</h3>
    <div class="consulta">
        
        <table>
            <tr class="th">
            <th>Referencia</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Preço Unit.</th>
            <th>Fornecedor</th>
            <th>Entrada</th>
            <th>Devoluçao</th>
            <th></th>

            
             
            </tr>
            <?php foreach($lista as $produto){?>
            
                <tr>
                    <td> <?= $produto['refProduto']  ?> </td>
                    <td> <?= $produto['descricao']  ?> </td>
                    <td> <?= $produto['quantidade']  ?> </td>
                    <td> <?= $produto['precoUnitario']  ?> </td>
                    <td> <?= $produto['fornecedor']  ?> </td>
                    <td> <?= $produto['dataEntrada']  ?> </td>
                    <td> <?= $produto['dataSaida']  ?> </td>
                    <td><a href="editarProduto.php?id=<?= $produto['idProduto']  ?>"><img src="images/editarArquivo.png" width="30px" alt=""></a></td>
                    
                </tr>

            <?php }  ?>

    </table>

    </div><!--consulta-->
    

</body>
</html>