<?php
require 'config.php';
$refProduto = filter_input(INPUT_POST,'refProduto');
$descricao = filter_input(INPUT_POST,'descricao');
$quantidade = filter_input(INPUT_POST,'quantidade');
echo $precoUnitario = filter_input(INPUT_POST,'precoUnitario');
$dataEntrada = filter_input(INPUT_POST,'dataEntrada');
$dataSaida = filter_input(INPUT_POST,'dataSaida');
echo $precoUnitario = str_replace(',','.',$precoUnitario);
//$teste = 2;
echo"<pre>";
    print_r($_POST);
echo "</pre>";
if($refProduto && $descricao && $quantidade && $precoUnitario && $dataEntrada && $dataSaida){
    echo"positivo";
    
    $sql = $pdo->prepare(
        "INSERT INTO produto(
        refProduto,
        descricao, 
        quantidade,
        precoUnitario,
        dataEntrada,
        dataSaida) 
        VALUES (
        :refProduto,
        :descricao,         
        :quantidade,
        :precoUnitario,
        :dataEntrada,
        :dataSaida)"
    );
    $sql->bindParam(':refProduto',$refProduto);
    $sql->bindParam(':descricao',$descricao );
    $sql->bindParam(':quantidade',$quantidade);
    $sql->bindParam(':precoUnitario',$precoUnitario);
    $sql->bindParam(':dataEntrada',$dataEntrada) ;
    $sql->bindParam(':dataSaida',$dataSaida);
    
    $sql->execute();

    //header("Location:index.php");

}else{
    echo"negativos";
 //  header("Location:cadastrarProduto.php");
    exit;
}

?>