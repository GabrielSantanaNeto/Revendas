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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="sidebar">
        <a href="">Novo Cliente</a>
    </div><!-- sidebar-->
    <div class="consulta">
    <h3>Meus Clientes</h3>
        <table>
            <tr class="th">
            <th>Identificador</th>
            <th>Nome</th>
            <th>Telefone</th>
            
             
            </tr>
            <?php foreach($lista as $cliente){?>
            
                <tr>
                    <td> <?= $cliente['idCliente']  ?> </td>
                    <td> <?= $cliente['nome']  ?> </td>
                    <td> <?= $cliente['telefone']  ?> </td>
                    
                </tr>

            <?php }  ?>

    </table>

    </div><!--consulta-->
    

</body>
</html>