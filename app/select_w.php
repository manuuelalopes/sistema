<?php 
require_once 'conect.php';

$id = 2;

$sql = "SELECT nome, turma, nascimento, ativo FROM alunos WHERE id = :id";

try {
$stmt = $conexao->prepare($sql);
$stmt ->bindParam(":id", $id);
$stmt->execute();

$aluno =$stmt->fetch (PDO::FETCH_ASSOC);
echo"Aluno: {$aluno['nome']} <br>";
echo"turma: {$aluno['turma']} <br>";
echo"ativo: {$aluno['ativo']} <br>";
echo "<hr>";
} catch (PDOException $e){
    echo"Erro: " .$e->getMessage(); 
}


?>