<?php
require_once '../database/conect.php';
function cadastrar($conexao,$nome,$turma,$nasc,$ativo){
         $sql = "INSERT INTO alunos (nome, turma, nascimento, ativo) VALUES (:nome, :turma, :nascimento, :ativo)";

        try {
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":turma", $turma);
            $stmt->bindParam(":nascimento", $nasc);
            $stmt->bindParam(":ativo", $ativo);
            $stmt->execute();
            echo "Aluno inserido com sucesso!";
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
 }

function relatorio($conexao){
     
        $sql = "SELECT *FROM alunos";
        
        try {
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            
            $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($alunos as $aluno) {
                echo "ID: {$aluno['id']} <br>";
                echo "nome: {$aluno['nome']} <br>";
                echo "turma: {$aluno['turma']} <br>";
                echo "ativo: {$aluno['ativo']} <br>";
                echo "<hr>";
                }
                } catch (PDOException $e) {
                    echo "Erro: " . $e->getMessage();
                }
}

function apagar ($conexao, $id){
        $sql = "DELETE FROM alunos WHERE id = :id";

        try{
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        echo "Usuario $id removido com sucesso! ";
        } catch (PDOException $e){
            echo"Erro: " .$e->getMessage(); 
        }
        };



function consultar($conexao, $id){

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
     }


function atualizar($conexao, $id,$nome,$turma,$nasc,$ativo){
         $sql = "UPDATE  alunos SET nome = :nome, turma = :turma, nascimento = :nasc, ativo = :ativo WHERE id = :id";

        try {
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":turma", $turma);
            $stmt->bindParam(":nasc", $nasc);
            $stmt->bindParam(":ativo", $ativo);
            $stmt->execute();
            echo "Aluno inserido com sucesso!";
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
 }




