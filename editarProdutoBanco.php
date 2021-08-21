<?php
require 'config.php';
$idProduto = filter_input(INPUT_POST, 'idProduto');
$refProduto = filter_input(INPUT_POST,'refProduto');
$descricao = filter_input(INPUT_POST,'descricao');
$quantidade = filter_input(INPUT_POST,'quantidade');
$precoUnitario = filter_input(INPUT_POST,'precoUnitario');
$fornecedor = filter_input(INPUT_POST, 'fornecedor');
$dataEntrada = filter_input(INPUT_POST,'dataEntrada');
$dataSaida = filter_input(INPUT_POST,'dataSaida');

$precoUnitario = str_replace(',','.',$precoUnitario);

if($idProduto && $refProduto && $descricao && $quantidade && $precoUnitario && $fornecedor && $dataEntrada && $dataSaida){

    $sql = $pdo->prepare("UPDATE produto  SET refProduto = :refProduto, descricao = :descricao, quantidade = :quantidade, 
     precoUnitario = :precoUnitario, fornecedor = :fornecedor, dataEntrada = :dataEntrada, dataSaida = :dataSaida WHERE idProduto = :idProduto");
    $sql->bindValue(':refProduto',$refProduto);
    $sql->bindValue(':descricao',$descricao );
    $sql->bindValue(':quantidade',$quantidade);
    $sql->bindValue(':precoUnitario',$precoUnitario);
    $sql->bindValue(':fornecedor',$fornecedor);
    $sql->bindValue(':dataEntrada',$dataEntrada) ;
    $sql->bindValue(':dataSaida',$dataSaida);
    $sql->bindValue(':idProduto', $idProduto);
    $sql->execute();

    header("Location:produto.php");

}else{
    header("Location:editarProduto.php");
    exit;
}

?>