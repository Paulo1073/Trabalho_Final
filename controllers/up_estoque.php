<?php 
require_once '../includes/conexao.php';

$nome = trim($_POST['nome']);
$descricao = trim($_POST['descri']);
$peso = trim($_POST['peso']);
$dimensao = trim($_POST['dimen']);



$stmt = $conexao->prepare('UPDATE estoque SET nome = :nome, descricao = :descricao, peso = :peso, dimensoes = :dimensoes');
$stmt->bindvalue(':nome',$nome);
$stmt->bindvalue(':descricao',$descricao);
$stmt->bindvalue(':peso',$peso);
$stmt->bindvalue(':dimensoes',$dimensao);

$stmt->execute();

if($stmt->execute()){
 echo '<script>
  alert("Atualizado Com Sucesso!")
  window.location.href = "../views/estoque.php"
</script>';

}else {
 echo '<script>
  alert("Atualização Inconcluida!")
  window.location.href = "../views/update_estoque.php"
</script>';
}
?>