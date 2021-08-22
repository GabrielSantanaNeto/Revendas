<?php
    require 'header.php';
    require 'config.php';

    $infoProduto=[];
    $idProduto= filter_input(INPUT_GET, 'id');

    if($idProduto){
        $sql= $pdo->prepare("SELECT * FROM produto WHERE idProduto= :id");
        $sql->bindValue(':id', $idProduto);
        $sql->execute();

        if($sql->rowCount() > 0){
            $infoProduto= $sql->fetch(PDO::FETCH_ASSOC);

        }else{
            header("Location:produto.php");
            exit;
        }
    }else{
        header("Location:produto.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    <div class="formulario">
        <h2>Atualizar Produto</h2>
        <form action="editarProdutoBanco.php" method="POST">
            <input class="form-input" type="hidden" name="idProduto" value="<?= $infoProduto['idProduto']?>">
            <input class="form-input" type="text" name="refProduto" value="<?= $infoProduto['refProduto']?>"><br><br>
            <input class="form-input" type="text" name="descricao" value="<?= $infoProduto['descricao']?>"><br><br>
            <input class="form-input" type="number" name="quantidade" value="<?= $infoProduto['quantidade']?>"><br><br>
            <input class="form-input" type="text" name="precoUnitario" value="<?= $infoProduto['precoUnitario']?>"><br><br>
            <input class="form-input" type="text" name="fornecedor" value="<?= $infoProduto['fornecedor']?>"<br><br>
            <label for="">Data do fornecimento</label><br>
                <input class="form-input" type="date" name="dataEntrada" value="<?= $infoProduto['dataEntrada']?>"><br><br>
            <label for="">Data de devolução</label><br>
                <input class="form-input" type="date" name="dataSaida" value="<?= $infoProduto['dataSaida']?>"><br><br>
            <input class="form-input" type="submit" value="Atualizar"><br><br>
        </form>
    </div> <!--Formulario-->
</body>
</html>

