<?php require_once '../includes/functions.php';?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio</title>
</head>


<body>
   <?php include '../includes/header.php';?> 
    <main>
        <?php 
        
        relatorio($conexao);
        ?>
    </main>
    <?php  include '../includes/footer.php';?>
</body>

</htmml>