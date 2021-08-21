<?php
    require 'config.php';
    require 'header.php';

    $lista = [];
    $sql = $pdo->query("SELECT * FROM cliente");

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
    <title>Clientes</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">

    
    <div class="sidebar">
        <a href="cadastrarCliente.php"><img src="images/novoCliente.png" alt=""><br> Novo </a>
    </div><!-- sidebar-->
    <h3>Meus Clientes</h3>
    <div class="consulta">
        
        <table>
            <tr class="th">
            <th>Identificador</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th></th>

            
             
            </tr>
            <?php foreach($lista as $cliente){?>
            
                <tr>
                    <td> <?= $cliente['idCliente']  ?> </td>
                    <td> <?= $cliente['nome']  ?> </td>
                    <td> <?= $cliente['telefone']  ?> </td>
                    <td><a href="editarCliente.php?id=<?= $cliente['idCliente']  ?>"><img src="images/editarArquivo.png" width="30px" alt=""></a></td>
                    
                </tr>

            <?php }  ?>

    </table>

    </div><!--consulta-->
    </div><!--container-->
    

</body>
</html>