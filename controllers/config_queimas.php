<?php 
require_once '../includes/conexao.php';
session_start();

$motivo = trim($_POST['motivo']);
$data = trim($_POST['data']);
$responsavel = trim($_POST['responsavel']);
$quantidade = trim($_POST['quantidade']);
$produto = trim($_POST['produto']);


if(!empty($motivo) && !empty($data) && !empty($responsavel) && !empty($quantidade) && !empty($produto)){
    $stmt = $conexao->prepare('INSERT INTO queimas (motivo, data_queima, responsavel, quantidade, produto) VALUES (:motivo, :data_queima, :responsavel, :quantidade, :produto)');
    $stmt->bindvalue(':motivo', $motivo);
    $stmt->bindvalue(':data_queima', $data);
    $stmt->bindvalue(':responsavel', $responsavel);
    $stmt->bindvalue(':quantidade', $quantidade);
    $stmt->bindvalue(':produto', $produto);
    $stmt->execute();

    echo "<script>alert('Dados cadastrados com sucesso!');window.location.href = '../views/queimas.php';</script>";


}else{
    echo "<script>alert('Preencha os campos!')";
}



?>