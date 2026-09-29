<?php 
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../login/verifica_user.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mini_sistema/style/style.css">
    <title>Cadastro Aluno</title>
</head>
<body>
    <?php include '../includes/header.php';?>
    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"><br>
        <label for="turma">Turma: </label>
        <input type="text" name="turma" id="turma"><br>
        <label for="nasc">Nascimento: </label>
        <input type="date" name="nasc" id="nasc"><br>
        <label for="ativo">Ativo: </label>
        <input type="radio" name="ativo" id="ativo" value="true">
        <label for="sim">Sim</label>
        <input type="radio" name="ativo" id="ativo" value="false">
        <label for="nao">Não</label><br>
        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
    cadastrar($conexao, $_POST['nome'], $_POST['nasc'], $_POST['turma'], $_POST['ativo']);
    }
    include '../includes/footer.php';?>
</body>
</html>