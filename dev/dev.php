<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../login.php");
    exit();
}
$error = $_SESSION['error'] ?? '';
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cadastro de Admin - Kilix</title>
  <link rel="stylesheet" href="../assets/css/dev.css" />
</head>
<body>
  <main id="container">

    <form  action="../controllers/create_dev.php" id="form" method="POST">
      <div id="Tag_Form">
        <h1>CADASTRO DE ADMIN</h1>
      </div>
      <p style="color:red;" id="error"><?=
        ($error) ?></p>
        <div class="input_box">
            <div class="image_box">
                <img class="image_style" src="../assets/images/image copy.png" alt="Ícone de usuário" />
            </div>
            <input class="input_style" name='nome' type="text" id="nome" required placeholder=" " />
            <label class="placeholder" for="email">Nome</label>
      </div>

      <div class="input_box">
        <div class="image_box">
          <img class="image_style" src="../assets/images/Email.png" alt="Ícone de usuário" />
        </div>
        <input class="input_style" name='email' type="text" id="email" required placeholder=" " />
        <label class="placeholder" for="email">Email</label>
      </div>

      <div class="input_box">
        <div class="image_box">
          <img class="image_style" src="../assets/images/image.png" alt="Ícone de senha" />
        </div>
        <input class="input_style" name='senha' type="password" id="senha" required placeholder=" " />
        <label class="placeholder" for="senha">Senha</label>
      </div>

      <div class="input_enviar">
        <input  id="Login" type="submit" value="CADASTRAR" />
        <a id="exit" style="  text-decoration: none;
  color: rgb(0, 0, 0);  " href="../logout.php">Sair</a>
      </div>
    </form>
  </main> 
</body>
</html>
