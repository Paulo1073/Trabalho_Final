<?php 

session_start();
require_once '../includes/conexao.php';

if (isset($_GET['id_qm'])) {
    $id = $_GET['id_qm'];
    $stmt = $conexao->prepare('SELECT * FROM queimas WHERE id = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $res = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($res) {
        $_SESSION['res'] = $res; 
        header('Location: ../views/update_queimas.php');
        exit();
    }
}

?>