
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
    <link rel="stylesheet" href="../assets/css/create_queimas.css">
    <title>Cadastro de Queimas</title>
</head>
<body>
    <main>
        <div id="container_central">
            <form action="../controllers/config_queimas.php" method="post" >
                <h1 id="h1" >
                    CADASTRO DE QUEIMAS
                </h1>
                <div id="container_inputs" >
                    <div class="inputs" >
                        <label for="nome">Motivo: </label>
                        <input id="input_motivo" name="motivo"  required type="text">
                    </div>
                    
                    <div id="central_container_inputs" >
                        <div class="container_Inputs" >
                            <div class="inputs" >
                                <label for="email">Data: </label>
                                <input id="input_data"  name="data"  required type="date">
                            </div>
                            
                            <div class="inputs" >
                                <label for="cargo">Quantidade: </label>
                                <input  id="input_quantidade" name="quantidade"   required type="number">
                            </div>
                        </div>

                        <div class="container_Inputs" id="container_inputs_bottom"  >
                            <div class="inputs" >
                                <label for="tel">Responsavel: </label>
                                <input  id="input_responsavel"  name="responsavel"   required type="text" name="">
                            </div>
                            
                            <div class="inputs" >
                                <label for="tel">Produto: </label>
                                <input  id="input_produto"  name="produto"   required type="text" name="">
                            </div>
                        </div>

                        <div class="inputs"  id="buttons" >
                            <a  class='bt'  id="link_return" href="estoque.php">RETORNAR</a>
                            <input class='bt' id="input_submit"   type="submit" value="CADASTRAR">
                        </div>
                    </div>
                    </div>


                </div>
            </form>

        </div>
    </main>
</body>
</html>