<?php
    require 'header.php';
    require 'config.php';

    $infoCliente =[];
    $idCliente = filter_input(INPUT_GET, 'id');

    if($idCliente){
        $sql= $pdo->prepare("SELECT * FROM cliente WHERE idCliente = :id");
        $sql->bindValue(':id', $idCliente);
        $sql->execute();

        if($sql->rowCount() > 0){
            $infoCliente = $sql->fetch(PDO::FETCH_ASSOC);

        }else{
            header("Location:cliente.php");
            exit;
        }
    }else{
        header("Location:cliente.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
    <h2>Atualizar Cliente</h2>
    <form action="editarClienteBanco.php" method="POST">
        <input type="hidden" name="idCliente" value="<?= $infoCliente['idCliente']?>">
        <input type="text" name="nome" value="<?= $infoCliente['nome']?>"><br><br>
        <input type="number" name="telefone" value="<?= $infoCliente['telefone']?>"><br><br>
        <input type="submit" value="Atualizar"><br><br>
    </form>
</body>
</html>

