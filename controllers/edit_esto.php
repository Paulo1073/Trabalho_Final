<?php 

session_start();
require_once '../includes/conexao.php';

if (isset($_GET['id_esto'])) {
    $id = $_GET['id_esto'];
    $stmt = $conexao->prepare('SELECT * FROM estoque WHERE id = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $res = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($res) {
        $_SESSION['res'] = $res; 
        header('Location: ../views/update_estoque.php');
        exit();
    }
}

?>