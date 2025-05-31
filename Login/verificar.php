<?php
session_start();
require_once 'conexao.php';

$email = trim($_POST['email']);
$senha = trim($_POST['senha']);


if (!empty($email) && !empty($senha)) {
    $stmt = $conexao->prepare("SELECT * FROM usuario WHERE email = :email");
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $usuario = $stmt->fetch();

    if($usuario['nivel_id'] == 1){

        if ($usuario && $senha === $usuario['senha']) {
            $_SESSION['id_usuario'] = $usuario['id'];
            $_SESSION['email_usuario'] = $usuario['email'];
            header("Location: painel.php");
            exit();
        } else {
            $_SESSION['error'] = 'Credenciais incorretas';
            header('Location: index.php');
            exit;
        }

    } else if($usuario['nivel_id'] == 2) {

        if ($usuario && $senha === $usuario['senha']) {
            $_SESSION['id_usuario'] = $usuario['id'];
            $_SESSION['email_usuario'] = $usuario['email'];
            header("Location: painel2.php");
            exit();

        } else {
            $_SESSION['error'] = 'Erros Nas Credenciais';
            header('Location: index.php');
            exit();
        }
    }else{
        $_SESSION['error'] = 'Seu Cadastro Está incorreto';
        header('Location: index.php');
        exit();
    }   
} else {
    $_SESSION['error'] = 'Preencha todos os campos';
    header('Location: index.php');
    exit();

}
?>
