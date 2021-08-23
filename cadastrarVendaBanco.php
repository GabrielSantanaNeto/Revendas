<?php

require 'config.php';

$refProduto = filter_input(INPUT_POST,'refProduto');
$idCliente = filter_input(INPUT_POST,'idCliente');
$dataVenda = filter_input(INPUT_POST,'dataVenda');
$precoTotal = filter_input(INPUT_POST,'precoTotal');
$prazoPagamento = filter_input(INPUT_POST, 'prazoPagamento');
$formaPagamento = filter_input(INPUT_POST,'formaPagamento');
$totalPago = filter_input(INPUT_POST,'totalPago');

echo "<pre>";
print_r($_POST);


$precoTotal = str_replace(',','.',$precoTotal);
$totalPago = str_replace(',','.', $totalPago);

if($refProduto && $idCliente && $dataVenda && isset($precoTotal) && $prazoPagamento && $formaPagamento && isset($totalPago)){
    $sql = $pdo->prepare(
        "INSERT INTO venda(
        refProduto,
        idCliente,
        dataVenda,
        precoTotal,
        prazoPagamento,
        formaPagamento,
        totalPago
        ) 
        VALUES (
        :refProduto,
        :idCliente,
        :dataVenda,
        :precoTotal,
        :prazoPagamento,
        :formaPagamento,
        :totalPago
        )"
    );

    $sql->bindValue(':refProduto',$refProduto);
    $sql->bindValue(':idCliente',$idCliente,);
    $sql->bindValue(':dataVenda',$dataVenda);
    $sql->bindValue(':precoTotal',$precoTotal);
    $sql->bindValue(':prazoPagamento',$prazoPagamento);
    $sql->bindValue(':formaPagamento',$formaPagamento);
    $sql->bindValue(':totalPago',$totalPago);
    
    $sql->execute();
    
    header("Location:venda.php");
    exit;
}else{
    header("Location:cadastrarVenda.php");
    exit;
}


?>