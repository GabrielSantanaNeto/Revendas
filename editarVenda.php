<?php
    require 'header.php';
    require 'config.php';

    $infoVenda=[];
    $idVenda= filter_input(INPUT_GET, 'idVenda');

    if($idVenda){
        $sql= $pdo->prepare("SELECT * FROM venda WHERE idVenda= :idVenda");
        $sql->bindValue(':idVenda', $idVenda);
        $sql->execute();

        if($sql->rowCount() > 0){
            $infoVenda= $sql->fetch(PDO::FETCH_ASSOC);

        }else{
            header("Location:venda.php");
            exit;
        }
    }else{
        header("Location:venda.php");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Venda</title>
</head>
<body>
    <div class="formulario">
        <h2>Atualizar Venda</h2>
        <form action="editarVendaBanco.php" method="POST">
            <input class="form-input" type="hidden" name="idVenda" value="<?= $infoVenda['idVenda']?>">
            <input class="form-input" type="number" name="refProduto" value="<?= $infoVenda['refProduto']?>"><br><br>
            <input class="form-input" type="number" name="idCliente" value="<?= $infoVenda['idCliente']?>"><br><br>
            <label for="">Data da Venda</label><br>
                <input class="form-input" type="date" name="dataVenda" value="<?= $infoVenda['dataVenda']?>" ><br><br>
            <input class="form-input" type="text" name="precoTotal" value="<?= $infoVenda['precoTotal']?>"><br><br>
            <label for="">Prazo para pagamento</label><br>
                <input class="form-input" type="date" name="prazoPagamento" value="<?= $infoVenda['prazoPagamento']?>" ><br><br>
            <label for="">Forma de pagamento</label><br>
            <input class="form-input radio" type="radio" name="formaPagamento" value="A vista"
                <?php
                    if($infoVenda['formaPagamento'] == 'A vista'){
                        echo "checked";
                    }
                ?>
            
            
            ><label for="">A vista</label><br>
                
            <input class="form-input radio" type="radio" name="formaPagamento" value="A prazo"
                <?php
                    if($infoVenda['formaPagamento'] == 'A prazo'){
                        echo "checked";
                    }
                ?>
            
            ><label for="">A prazo</label><br><br>
            <input class="form-input" type="text" name="totalPago" value="<?= $infoVenda['totalPago']?>"><br><br>
            
            <input class="form-input" type="submit" value="Atualizar"><br><br>
        </form>
    </div> <!--Formulario-->
</body>
</html>