<?php
require 'config.php';

$nome = filter_input(INPUT_POST,'nome');
$telefone = filter_input(INPUT_POST,'telefone');

if($nome && $telefone){
    $sql = $pdo->prepare("INSERT INTO cliente (nome, telefone) VALUES (:nome, :telefone)");
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':telefone', $telefone);
    $sql->execute();

    header("Location:index.php");

}else{
    header("Location:cadastrarCliente.php");
    exit;
}

?>