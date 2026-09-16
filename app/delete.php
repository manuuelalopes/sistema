<?php
require_once 'conect.php';
$sql = "DELETE FROM alunos WHERE id = :id";
$id=7;
try{
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    echo "Usuario $id removido com sucesso! ";
} catch (PDOException $e){
    echo"Erro: " .$e->getMessage(); 
}

?>