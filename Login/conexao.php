<?php
try {
    $conexao = new PDO("mysql:host=localhost;dbname=kilix;charset=utf8mb4", "root", "1405", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $error) {
    die("Erro no banco de dados: " . $error->getMessage());
}
?>