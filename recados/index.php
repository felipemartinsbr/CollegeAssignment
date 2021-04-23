<?php
require_once 'parts/inicializacao.php';
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mural de Recados</title>
</head>
<body>
<h1>Mural de Recados</h1><br>
<hr>
<form action="" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="<?= $dados->nome??"" ?>"><br>
    // value = < ?= !empty($dados->nome)?$dados->nome:" ?>"
    // Se dados do nome não tiver vazio, escreva o nome, senão retorne vazio

    <label for="email">E-mail:</label>
    <input type="text" name="email" id="email" value="<?= $dados->email??"" ?>"><br>

    <label for="cidade">Cidade:</label>
    <input type="text" name="cidade" id="cidade" value="<?= $dados->cidade??"" ?>"><br>

    <label for="recado">Recado:</label>
    <input type="text" name="recado" id="recado" value="<?= $dados->nrecado??"" ?>"><br>

    <input type="submit" name="cadastrar" value="Cadastrar" ><br>

</form>
<p>
<?php
include 'parts/tabelaDeRecados.php'
?>
</p>
</body>

</html>