<?php
require 'config.php';

$descricao = filter_input(INPUT_POST,'descricao');
$refProduto = filter_input(INPUT_POST,'refproduto');
$quantidade = filter_input(INPUT_POST,'quantidade');
$precoUnitario = filter_input(INPUT_POST,'precoUnitario');
$dataEntrada = filter_input(INPUT_POST,'dataEntrada');
$dataSaida = filter_input(INPUT_POST,'dataSaida');

//echo"<pre>";
 //   print_r($_POST);
//echo "</pre>";
if($descricao && $refProduto && $quantidade && $precoUnitario){
    $sql = $pdo->prepare(
        "INSERT INTO produto(
        descricao, 
        refproduto,
        quantidade,
        precoUnitario,
        dataEntrada,
        dataSaida) 
        VALUES (
        :descricao, 
        :refproduto,
        :quantidade,
        :precoUnitario,
        :dataEntrada,
        :dataSaida)"
    );

    $sql->bindValue(':descricao',$descricao );
    $sql->bindValue(':refproduto,',$refProduto);
    $sql->bindValue(':quantidade',$quantidade);
    $sql->bindValue(':precoUnitario',$precoUnitario);
    $sql->bindValue(':dataEntrada',$nome);
    $sql->bindValue(':dataSaida',$nome);

    $sql->execute();

    header("Location:index.php");

}else{
   header("Location:cadastrarProduto.php");
    exit;
}

?>