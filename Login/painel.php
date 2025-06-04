<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: Login.php");
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
    <h1>PARABÉNS VOCÊ PASSOU!!!!!!!</h1>
    <img src="https://e7.pngegg.com/pngimages/147/495/png-clipart-smiley-thumb-signal-emoticon-meme-smiley-love-miscellaneous.png" alt="Imagem de parabéns">
    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>
