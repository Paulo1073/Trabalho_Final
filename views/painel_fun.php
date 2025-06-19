<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../Login.php");
    exit();
}
?>

<?php
require_once '../includes/conexao.php';

try {
    $sql = "SELECT id, nome, descricao, peso, dimensoes FROM estoque";
    $stmt = $conexao->query($sql);
    $estoque = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erro ao buscar funcionários: " . $e->getMessage());
}
?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/funcionarios.css">
    <title>Painel Funcionarios</title>
</head>
<body>
    <header id="header" >
        <div id="container_nav" >

            <nav id="nav_bar" >

                <div><img id="logo" src="../assets/images/Logo-removebg-preview.png" alt=""></div>

            </nav>

        </div>


    </header>

    <main>
        <section id="section_up" >
            <div id="container_h1" >
                <h1>ESTOQUE</h1>
            </div>


        </section>

        <section id="section_down"> 
            <div id="container_table">
                <table id="table" border="0">
                    <tbody id="tbody">
                        <table border="1"  >
                            <thead id="thead" >
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>DESCRIÇÃO</th>
                                    <th>PESO</th>
                                    <th>DIMENSÕES</th>
                                </tr>
                            </thead>
                            <tbody id="tbody" >
                                <?php foreach ($estoque as $esto): ?>
                                    <tr>
                                        <td><?= $esto['id'] ?></td>
                                        <td><?= $esto['nome'] ?></td>
                                        <td><?= $esto['descricao']?></td>
                                        <td><?= $esto['peso'] ?></td>
                                        <td><?= $esto['dimensoes'] ?></td>


                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    <script src="../assets/js/funcionarios.js"></script>
</body>
</html>     