<?php 
require_once '../includes/conexao.php';

$motivo = trim($_POST['motivo']);
$data = trim($_POST['data']);
$responsavel = trim($_POST['responsavel']);
$quantidade = trim($_POST['quantidade']);
$produto = trim($_POST['produto']);



$stmt = $conexao->prepare('UPDATE queimas SET motivo = :motivo, data_queima = :data_queima, responsavel = :responsavel, quantidade = :quantidade, produto = :produto');
$stmt->bindvalue(':motivo',$motivo);
$stmt->bindvalue(':data_queima',$data);
$stmt->bindvalue(':responsavel',$responsavel);
$stmt->bindvalue(':quantidade',$quantidade);
$stmt->bindvalue(':produto',$produto);
$stmt->execute();

if($stmt->execute()){
 echo '<script>
  alert("Atualizado Com Sucesso!")
  window.location.href = "../views/queimas.php"
</script>';

}else {
 echo '<script>
  alert("Atualização Inconcluida!")
  window.location.href = "../views/update_queimas.php"
</script>';
}
?>