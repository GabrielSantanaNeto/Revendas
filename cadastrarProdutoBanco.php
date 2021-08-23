<?php
require 'config.php';
$refProduto = filter_input(INPUT_POST,'refProduto');
$descricao = filter_input(INPUT_POST,'descricao');
$quantidade = filter_input(INPUT_POST,'quantidade');
$precoUnitario = filter_input(INPUT_POST,'precoUnitario');
$fornecedor = filter_input(INPUT_POST, 'fornecedor');
$dataEntrada = filter_input(INPUT_POST,'dataEntrada');
$dataSaida = filter_input(INPUT_POST,'dataSaida');

$precoUnitario = str_replace(',','.',$precoUnitario);


if( $refProduto && $descricao && $quantidade && isset($precoUnitario) && $fornecedor && $dataEntrada && $dataSaida){
    
    
    $sql = $pdo->prepare(
        "INSERT INTO produto(
        refProduto,
        descricao, 
        quantidade,
        precoUnitario,
        fornecedor,
        dataEntrada,
        dataSaida) 
        VALUES (
        :refProduto,
        :descricao,         
        :quantidade,
        :precoUnitario,
        :fornecedor,
        :dataEntrada,
        :dataSaida)"
    );
    $sql->bindValue(':refProduto',$refProduto);
    $sql->bindValue(':descricao',$descricao );
    $sql->bindValue(':quantidade',$quantidade);
    $sql->bindValue(':precoUnitario',$precoUnitario);
    $sql->bindValue(':fornecedor',$fornecedor);
    $sql->bindValue(':dataEntrada',$dataEntrada) ;
    $sql->bindValue(':dataSaida',$dataSaida);
    
    $sql->execute();

    header("Location:produto.php");

}else{
    
    header("Location:cadastrarProduto.php");
    exit;
}

?>