<?php 
require_once '../includes/conexao.php';



$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$cargo = trim($_POST['cargo']);
$tel = trim($_POST['tel']);
$salario = trim($_POST['salario']);
$senha = trim($_POST['senha']);


$stmt = $conexao->prepare('UPDATE funcionarios SET nome = :nome, email = :email, cargo = :cargo, telefone = :telefone, salario = :salario, senha = :senha ');
$stmt->bindvalue(':nome',$nome);
$stmt->bindvalue(':email',$email);
$stmt->bindvalue(':cargo',$cargo);
$stmt->bindvalue(':telefone',$tel);
$stmt->bindvalue(':salario',$salario);
$stmt->bindvalue(':senha',$senha);
$stmt->execute();

if($stmt->execute()){
echo '<script>
  alert("Atualizado Com Sucesso!");
  window.location.href = "../views/funcionarios.php";
  </script>';

}else {
 echo '<script>
  alert("Atualização Inconcluida!");
  window.location.href = "../views/update_funcionarios.php";
</script>';
}
?>