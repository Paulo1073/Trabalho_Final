<?php
session_start();
$error = $_SESSION['error'] ?? '';
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Kilix</title>
  <link rel="stylesheet" href="assets/css/login.css" />
</head>
<body>
  <main id="container">

    <form  action="includes/verificar.php" id="form" method="POST">
      <div id="Tag_Form">
        <h1>LOGIN</h1>
      </div>
      <p style="color:red;" id="error"><?=
        ($error) ?></p>
      <div class="input_box">
        <div class="image_box">
          <img class="image_style" src="assets/images/image copy.png" alt="Ícone de usuário" />
        </div>
        <input class="input_style" name='email' type="text" id="email" required placeholder=" " />
        <label class="placeholder" for="email">Email</label>
      </div>

      <div class="input_box">
        <div class="image_box">
          <img class="image_style" src="assets/images/image.png" alt="Ícone de senha" />
        </div>
        <input class="input_style" name='senha' type="password" id="senha" required placeholder=" " />
        <label class="placeholder" for="senha">Senha</label>
      </div>

      <div class="input_enviar">
        <input  id="Login" type="submit" value="ENTRAR" />
        <p id="recover_password">ESQUECEU A SENHA?<a href="#"> RECUPERAR SENHA</a></p>
      </div>
    </form>
  </main>
</body>
</html>
