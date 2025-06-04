<?php
session_start();
require_once 'conexao.php';

$email =trim($_POST['email']);
$nome = trim($_POST['nome']);
$senha = trim($_POST['senha']);

if (!empty($email) && !empty($nome) && !empty($senha)) {

    $senha = password_hash($senha, PASSWORD_DEFAULT);
    
    $stmt = $conexao->prepare("INSERT INTO usuarios (email, nome, senha) VALUES (:email, :nome, :senha)");
    $stmt->bindValue(':email', $email); 
    $stmt->bindValue(':nome', $nome); 
    $stmt->bindValue(':senha', $senha);

    if ($stmt->execute()) {
        $_SESSION['error'] = '<p style="color:Green;" id="error">Dados Cadastrados Com Sucesso</p>';
        header("Location: login.php");
        exit;
    } else {
        $_SESSION['error'] = 'Erro ao cadastrar os dados';
    }

} else {
    $_SESSION['error'] = 'Preencha Todos os Campos';
}
?>