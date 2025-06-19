<?php 
session_start();
require_once '../includes/conexao.php';

$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$cargo = trim($_POST['cargo']);
$tel = trim($_POST['tel']);
$salario = trim($_POST['salario']);
$senha = trim($_POST['senha']);
$nivel_id = '2' ;

if (!empty($nome) && !empty($email) && !empty($cargo) && !empty($tel) && !empty($salario) && !empty($senha)) {

    try {

        $conexao->beginTransaction();


        $stmtUser = $conexao->prepare("INSERT INTO usuarios (nome, email, senha, nivel_id  ) VALUES (:nome, :email, :senha, :nivel_id)");
        $stmtUser->bindValue(':nome', $nome);
        $stmtUser->bindValue(':email', $email);
        $stmtUser->bindValue(':senha', $senha);
        $stmtUser->bindValue(':nivel_id', $nivel_id);
        $stmtUser->execute();
 
        $usuario_id = $conexao->lastInsertId();


        $stmtFunc = $conexao->prepare("
            INSERT INTO funcionarios (usuarios_id, nome, email, senha, cargo, telefone, salario) 
            VALUES 
            (:usuarios_id, :nome, :email, :senha, :cargo, :tel, :salario)
        ");
        $stmtFunc->bindValue(':usuarios_id', $usuario_id);
        $stmtFunc->bindValue(':nome', $nome);
        $stmtFunc->bindValue(':email', $email);
        $stmtFunc->bindValue(':senha', $senha);
        $stmtFunc->bindValue(':cargo', $cargo);
        $stmtFunc->bindValue(':tel', $tel);
        $stmtFunc->bindValue(':salario', $salario);
        $stmtFunc->execute();

        $conexao->commit();

        echo "<script>alert('Dados cadastrados com sucesso!');window.location.href = '../views/funcionarios.php';</script>";
    } catch (PDOException $e) {
        $conexao->rollBack();
        echo "<script>alert('Erro ao cadastrar: " . $e->getMessage() . "');window.location.href = '../views/create_funcionarios.php';</script>";
    }

} else {
    echo "<script>alert('Preencha todos os dados!');window.location.href = '../views/create_funcionarios.php';</script>";
}
?>