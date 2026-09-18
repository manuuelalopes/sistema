<?php require_once '../includes/functions.php';?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>

<body>
    <?php
    include '../includes/header.php'
    ?>
    <hr>
    <main>
        <form action="" method="post">
            <label for="id">ID</label>
            <input type="number" name="id" id="id" placeholder="Insira o ID para atualizar" required> <br>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome"><br>
            <label for="turma">Turma</label>
            <input type="text" name="turma" id="turma"><br>
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
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
        atualizar ($conexao, $_POST['id'], $_POST['nome'], $_POST['turma'], $_POST['nasc'], $_POST['ativo']);
        }
        ?>
    </main>
        <hr>
        <?php include '../includes/footer.php'?>
</body>
</html>














