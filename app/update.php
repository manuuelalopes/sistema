<?php 
require_once 'conect.php';
$id = 4;


$n_nome = 'Dotoievski';
$sql = "UPDATE alunos SET nome = :nome WHERE id = :id";

try{
$stmt = $conexao->prepare($sql);
$stmt ->bindParam(":nome", $n_nome);
$stmt ->bindParam(":id", $id);
$stmt->execute();
echo "Registro Atualizado";
} catch (PDOException $e){
    echo"Erro: " .$e->getMessage(); 
}



?>