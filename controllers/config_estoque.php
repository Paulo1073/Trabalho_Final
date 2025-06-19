<?php 
require_once '../includes/conexao.php';
session_start();

$nome = trim($_POST['nome']);
$descricao = trim($_POST['descri']);
$peso = trim($_POST['peso']);
$dimensoes = trim($_POST['dimen']);


if(!empty($nome) && !empty($descricao) && !empty($peso) && !empty($dimensoes)){
    $stmt = $conexao->prepare('INSERT INTO estoque (nome, descricao, peso, dimensoes) VALUES (:nome, :descricao, :peso, :dimensoes)');
    $stmt->bindvalue(':nome', $nome);
    $stmt->bindvalue(':descricao', $descricao);
    $stmt->bindvalue(':peso', $peso );
    $stmt->bindvalue(':dimensoes', $dimensoes);
    $stmt->execute();

    echo "<script>alert('Dados cadastrados com sucesso!');window.location.href = '../views/estoque.php';</script>";


}else{
    echo "<script>alert('Preencha os campos!')";
}



?>