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
    $sql = "SELECT id, produto, quantidade, motivo, data_queima, responsavel FROM queimas";
    $stmt = $conexao->query($sql);
    $queimas = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erro ao buscar funcionários: " . $e->getMessage());
}
?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/queimas.css">
    <title>Queimas</title>
</head>
<body>
    <header id="header" >
        <div id="container_nav" >

            <nav id="nav_bar" >

                <div><img id="logo" src="../assets/images/Logo-removebg-preview.png" alt=""></div>
                <div id="container_menu" ><img id="menu" src="../assets/images/image copy 2.png" alt=""></div>

            </nav>

        </div>

        <nav id="side_menu" class="hidden">
            <ul>
                <div id="container_user" >
                    <li class="User" >
                        <a href="perfil.html"><img  src="../assets/images/User.png" alt=""></a>
                    </li>
                </div>

                <div id="container_options" >
                    <li class="Stats" >
                        <a href="dashboard.html"><img  src="../assets/images/Stats.png" alt=""></a>
                        <p class="info_options" >STATUS</p>
                    </li>

                    <li class="stock" >
                        <a href="estoque.php"><img  src="../assets/images/Stock.png" alt=""></a>
                        <p class="info_options" >ESTOQUE</p>
                    </li>

                    <li class="Burnings" >
                        <a href="queimas.php"><img  src="../assets/images/Burnings.png" alt=""></a>
                        <p class="info_options" >QUEIMAS</p>
                    </li>

                    <li class="Employee" >
                        <a href="funcionarios.php"><img  src="../assets/images/employee.png" alt=""></a>
                        <p class="info_options" >FUNCIONARIOS</p>
                    </li>
                </div>

            </ul>
        </nav>
    </header>

    <main>
        <section id="section_up" >
            <div id="container_h1" >
                <h1>QUEIMAS</h1>
            </div>

            <div id="container_btn" >
                <div id="container_link" >
                    <a href="create_queimas.php">CADASTRAR</a>
                </div>
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
                                    <th>Produto</th>
                                    <th>Quantidade</th>
                                    <th>Motivo</th>
                                    <th>Data</th>
                                    <th>Responsavel</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody id="tbody" >
                                <?php foreach ($queimas as $quei): ?>
                                    <tr>
                                        <td><?= $quei['id'] ?></td>
                                        <td><?= $quei['produto'] ?></td>
                                        <td><?= $quei['quantidade']?></td>
                                        <td><?= $quei['motivo'] ?></td>
                                        <td><?= $quei['data_queima'] ?></td>
                                        <td><?= $quei['responsavel'] ?></td>
                                        <td id="td_buttons" >
                                        <a href="../controllers/edit_quei.php?id_qm=<?= $quei['id']?>">
                                            <img src="" alt="Edit" width="16" height="16">
                                        </a>

                                        <a href="../controllers/delete.php?id_qm=<?= $quei['id'] ?>"            onclick="return confirm('Tem certeza que deseja excluir este funcionário?');">
                                            <img src="#" alt="Delete" width="16" height="16">
                                        </a>

                                        </td>


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