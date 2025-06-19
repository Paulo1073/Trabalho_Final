<?php 

session_start();
require_once '../includes/conexao.php';

if (isset($_GET['id_up'])) {
    $id = $_GET['id_up'];
    $stmt = $conexao->prepare('SELECT * FROM funcionarios WHERE id = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $res = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($res) {
        $_SESSION['res'] = $res; 
        header('Location: ../views/update_funcionarios.php');
        exit();
    }
}

?>