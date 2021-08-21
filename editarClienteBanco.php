<?php
require 'config.php';
$idCliente = filter_input(INPUT_POST, 'idCliente');
$nome = filter_input(INPUT_POST,'nome');
$telefone = filter_input(INPUT_POST,'telefone');

if($nome && $telefone && $idCliente){

    $sql = $pdo->prepare("UPDATE cliente  SET nome = :nome, telefone = :telefone WHERE idCliente = :idCliente");
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':telefone', $telefone);
    $sql->bindValue(':idCliente', $idCliente);
    $sql->execute();

    header("Location:cliente.php");

}else{
    header("Location:editarCliente.php");
    exit;
}

?>