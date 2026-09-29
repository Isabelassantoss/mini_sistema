<?php require_once __DIR__ . '/../login/verifica_user.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mini_sistema/style/style.css">
    <title>Document</title>
</head>
<body>
    <?php include '../includes/header.php';?>
    <main>
        <div style="width: 50%; margin:auto; text-align:center; border:lpx solid black; border-radius:5px;">
    <?php 
require_once __DIR__ . '/../database/connect.php';

$sql = "SELECT * FROM alunos";

$stmt = $conexao->prepare($sql);
$stmt->execute();

$alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($alunos as $aluno){
    echo "ID: {$aluno['id']}<br>";
    echo "Nome: {$aluno['nome']}<br>";
    echo "Nascimento: {$aluno['nasc']}<br>";
    echo "Turma: {$aluno['turma']}<br>";
    echo "Ativo: {$aluno['ativo']}<br>";
    echo "<hr>";
}
?>
<?php include __DIR__ . '/../includes/footer.php';?>
</body>
</html>