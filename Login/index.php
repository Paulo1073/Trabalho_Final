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
  <title>Login</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <main id="container">

    <form  action="verificar.php" id="form" method="POST">
      <div id="Tag_Form">
        <h1>LOGIN</h1>
      </div>

      <div class="input_box">
        <div class="image_box">
          <img class="image_style" src="asstes/images/image copy.png" alt="Ícone de usuário" />
        </div>
        <input class="input_style" name='email' type="text" id="email" required placeholder=" " />
        <label class="placeholder" for="email">Email</label>
      </div>

      <div class="input_box">
        <div class="image_box">
          <img class="image_style" src="asstes/images/image.png" alt="Ícone de senha" />
        </div>
        <input class="input_style" name='senha' type="password" id="senha" required placeholder=" " />
        <label class="placeholder" for="senha">Senha</label>
      </div>

      <div class="input_enviar">
        <input class="login" id="Login" type="submit" value="ENTRAR" />
        <p id="recover_password">ESQUECEU A SENHA?<a href="#"> RECUPERAR SENHA</a></p>
        <?php if ($error): ?>
          <p id="error" style="color:red;"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
      </div>
    </form>
  </main>
</body>
</html>
