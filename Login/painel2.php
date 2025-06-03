<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Painel</title>
</head>
<body>
    <h1>PARABÉNS VOCÊ PASSOU!!</h1>
    <h2>BEM VINDO CLT+++</h2>
    <img style="width:500px; heigth:500px;" src="https://assets-blog.pagseguro.uol.com.br/wp-content/2022/07/carteira-de-trabalho-digital-min-2048x1228.jpg" alt="Imagem de parabéns">
    <p>
        <a href="logout.php">SOCORRO!!!!</a>
    </p>
</body>
</html>