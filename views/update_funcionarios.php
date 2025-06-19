
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
    <link rel="stylesheet" href="../assets/css/create_fun.css">
    <title>Atualizar Funcionarios</title>
</head>
<body>
    <main>
        <div id="container_central">
            <form action="../controllers/up_funcionarios.php" method="post" >
                <h1 id="h1" >
                    CADASTRO DE FUNCIONARIOS
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
                        <label for="email">Email: </label>
                        <input id="input_email"  name="email"value="<?php
                        if (isset($_SESSION['res']['email'])) {
                            echo ($_SESSION['res']['email']);
                            
                        }
                        ?>"  required type="email">
                    </div>

                    <div id="sub_container_up" >
                        <div class="inputs" >
                            <label for="cargo">Cargo: </label>
                            <input  id="input_cargo" name="cargo" value="<?php
                        if (isset($_SESSION['res']['cargo'])) {
                            echo ($_SESSION['res']['cargo']);
                            
                            
                        }
                        ?>" required type="text">
                        </div>

                        
                        <div class="inputs" >
                            <label for="tel">Telefone: </label>
                            <input  id="input_tel"  name="tel" value="<?php
                        if (isset($_SESSION['res']['telefone'])) {
                            echo ($_SESSION['res']['telefone']);
                            
                            
                        }
                        ?>"  required type="tel">
                        </div>
                        
                        <div class="inputs" >
                            <label name="salario"  for="">Salario: </label>
                            <input id="input_salario" name="salario"  value="<?php
                        if (isset($_SESSION['res']['salario'])) {
                            echo ($_SESSION['res']['salario']);
                            
                            
                        }
                        ?>"  required type="number" >
                        </div>
                    </div>
                    <div id="sub_container_down" >
     
                        <div class="inputs" >
                            <label for="senha">Senha: </label>
                            <input id="input_senha" value="<?php
                                if (isset($_SESSION['res']['senha'])) {
                                    echo ($_SESSION['res']['senha']);
                                    
                                    
                                }?>" name="senha"   required type="password"  >
                        </div>

                        <div class="inputs"  id="buttons" >
                            <a  id="link_return" href="funcionarios.php">RETORNAR</a>
                            <input id="input_submit" type="submit" value="ATUALIZAR">
                            
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </main>
</body>
</html>
