<?php
session_start();
require_once 'conexao.php';

$email = trim($_POST['email']);
$senha = trim($_POST['senha']);

if (!empty($email) && !empty($senha)) {
    $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $usuario = $stmt->fetch();

    if ($usuario) {
        $senhaArmazenada = $usuario['senha'];


        if (preg_match('/^\$2[ayb]\$|\$argon2/', $senhaArmazenada)) {
            $senhaCorreta = password_verify($senha, $senhaArmazenada);
        } else {

            $senhaCorreta = ($senha === $senhaArmazenada);
        }

        if ($senhaCorreta) {
            $_SESSION['id_usuario'] = $usuario['id'];
            $_SESSION['email_usuario'] = $usuario['email'];


            if (!preg_match('/^\$2[ayb]\$|\$argon2/', $senhaArmazenada)) {
                $novaSenhaHash = password_hash($senha, PASSWORD_DEFAULT);
                $stmtUpdate = $conexao->prepare("UPDATE usuarios SET senha = :senha");
                $stmtUpdate->bindValue(':senha', $novaSenhaHash);
                $stmtUpdate->execute();
            }


            if ($usuario['nivel_id'] == 1) {
                header("Location: ../views/dashboard.html");
                exit();
            } else if ($usuario['nivel_id'] == 2) {
                header("Location: ../views/painel_fun.php");
                exit();
            } else if ($usuario['nivel_id'] == 3) {
                header("Location: ../dev/dev.php");
                exit();
            } else {
                $_SESSION['error'] = 'Nível de usuário inválido';
                header('Location: ../Login.php');
                exit();
            }
        } else {
            $_SESSION['error'] = 'Email ou senha incorretos';
            header('Location:  ../Login.php');
            exit();
        }
    } else {
        $_SESSION['error'] = 'Usuario Não existe';
        header('Location:  ../Login.php');
        exit();
    }
} else {
    $_SESSION['error'] = 'Preencha todos os campos';
    header('Location:  Login.php');
    exit();
}
?>
