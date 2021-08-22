<?php
    require 'header.php';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <div class="formulario">
        <h2>Cadastro de Cliente</h2>
        <form action="cadastrarClienteBanco.php" method="POST">
            <input class="form-input" type="text" name="nome" placeholder="Nome do Cliente"><br><br>
            <input class="form-input" type="number" name="telefone" placeholder="Telefone do Cliente"><br><br>
            <input class="form-input" type="submit" value="Cadastrar"><br><br>
        </form>
    </div> <!--Formulario-->
</body>
</html>

