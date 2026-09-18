<?php require_once '../includes/functions.php'; ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta usuario</title>
</head>
<body>
    <?php include '../includes/header.php';?>
    <h1>Consultar usuario</h1>
    <main>
            <form action="" method="post">
                <label for="id">ID: </label>
                <input type="number" name="id" id="id" placeholder="Insira o ID para consultar" required><br>
                <input type="submit" value="Consultar">
            </form>
             <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        consultar ($conexao, $_POST['id']); 
        }
        ?>
    </main>
    <?php include '../includes/footer.php';?>
</body>
</html>

