<?php
$host = "192.168.10.60
";
$dbname = "escola";
$user = "escola";
$pass = "escola";

try {
    $conexao = new PDO (
        "pgsql:host=$host;
        dbname=$dbname",
        $user,
        $pass
    );
    echo "conexão realizada com sucesso! <br>";
    return $conexao;
} catch (PDOException $e){
    echo "erro: " . $e->getMessage();
}
?>