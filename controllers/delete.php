<?php  
require_once '../includes/conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $stmt = $conexao->prepare('DELETE FROM funcionarios WHERE id = :id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    

    $stmt = $conexao->prepare('DELETE FROM usuarios WHERE id = :usuarios_id');
    $stmt->bindValue(':usuarios_id', $id, PDO::PARAM_INT);
    $stmt->execute();



    header('Location: ../views/funcionarios.php');
    exit();

    
}else if(isset($_GET['id_estoque'])){
    $id = $_GET['id_estoque'];


    $stmt = $conexao->prepare('DELETE FROM estoque WHERE id = :id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();


    header('Location: ../views/estoque.php');
    exit();

}else{
    $id = $_GET['id_qm'];


    $stmt = $conexao->prepare('DELETE FROM queimas WHERE id = :id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();


    header('Location: ../views/queimas.php');
    exit();
}
?>