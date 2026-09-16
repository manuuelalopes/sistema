<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
        <?php 
        include '../includes/header.php'
        ?>
        <hr>
    <main>
        <form action="" method="post">
            <label for="nome">Nome:</label>
           <input type="text" name="nome" id="nome"><br>
           <label for="turma">Turma</label>
           <input type="text" name="turma" id="turma"><br>
           <label for="email">Email</label>
           <input type="email" name="email" id="email"><br>
           <label for="nasc">Nascimento</label>
           <input type="date" name="nasc" id="nasc"><br>
           <label for="ativo">Ativo: </label> <br>
           <input type="radio" name="ativo" id="ativo" value="true">
           <label for="ativo">Sim</label>
           <input type="radio" name="ativo" id="ativo" value="false">
           <label for="ativo">Não</label><br>
           <input type="submit" value="Cadastrar">
           <input type="reset" value="Limpar">
        </form>
    </main>
    <hr>
        <?php 
        include '../includes/footer.php'
        ?>
</body>
</html>




<?php 
require_once "conect.php";
$sql = "INSERT INTO alunos (nome, turma, nascimento, ativo) VALUES (:nome, :turma, :nascimento, :ativo)";

try{
$stmt = $conexao->prepare($sql);
$stmt->bindValue(":nome", "Manuela");
$stmt->bindValue(":turma", "I1D46A");
$stmt->bindValue(":nascimento", "2009-11-01");
$stmt->bindValue(":ativo", "true");

$stmt->execute();
echo "Aluno inserido com sucesso!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>