
<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../Login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/create_estoque.css">
    <title>Atualizar Queimas</title>
</head>
<body>
    <main>
        <div id="container_central">
            <form action="../controllers/up_estoque.php" method="post" >
                <h1 id="h1" >
                    CADASTRO DE PRODUTOS
                </h1>
                <div id="container_inputs" >
                    <div class="inputs" >
                        <label for="nome">Nome: </label>
                        <input id="input_nome" name="nome" value="<?php
                        if (isset($_SESSION['res']['nome'])) {
                            echo ($_SESSION['res']['nome']);
                            
                            
                        }
                        ?>"  required type="text">
                    </div>

                    <div class="inputs" >
                        <label for="email">Descrição: </label>
                        <input id="input_email"  name="descri" value="<?php
                        if (isset($_SESSION['res']['descricao'])) {
                            echo ($_SESSION['res']['descricao']);
                            
                            
                        }
                        ?>" required type="text">
                    </div>

                    <div id="sub_container_up" >
                        <div class="inputs" >
                            <label for="cargo">Peso: </label>
                            <input  id="input_cargo" name="peso"  value="<?php
                        if (isset($_SESSION['res']['peso'])) {
                            echo ($_SESSION['res']['peso']);
                            
                            
                        }
                        ?>"  required type="number">
                        </div>

                        
                        <div class="inputs" >
                            <label for="tel">Dimensões: </label>
                            <input  id="input_tel"  name="dimen" value="<?php
                        if (isset($_SESSION['res']['dimensoes'])) {
                            echo ($_SESSION['res']['dimensoes']);
                            
                            
                        }
                        ?>"   required type="tel" name="">
                        </div>
                        
                    </div>
                    <div id="sub_container_down" >
                             <div class="inputs"  id="buttons" >
                            <a  class='bt'  id="link_return" href="estoque.php">RETORNAR</a>
                            <input class='bt' id="input_submit"   type="submit" value="ATUALIZAR">
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </main>
</body>
</html>