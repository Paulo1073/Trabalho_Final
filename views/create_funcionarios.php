
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
    <title>Cadastro de Funcionarios</title>
</head>
<body>
    <main>
        <div id="container_central">
            <form action="../controllers/config_funcionarios.php" method="post" >
                <h1 id="h1" >
                    CADASTRO DE FUNCIONARIOS
                </h1>
                <div id="container_inputs" >
                    <div class="inputs" >
                        <label for="nome">Nome: </label>
                        <input id="input_nome" name="nome"  required type="text">
                    </div>

                    <div class="inputs" >
                        <label for="email">Email: </label>
                        <input id="input_email"  name="email" required type="email">
                    </div>

                    <div id="sub_container_up" >
                        <div class="inputs" >
                            <label for="cargo">Cargo: </label>
                            <input  id="input_cargo" name="cargo"  required type="text">
                        </div>

                        
                        <div class="inputs" >
                            <label for="tel">Telefone: </label>
                            <input  id="input_tel"  name="tel"  required type="tel">
                        </div>
                        
                        <div class="inputs" >
                            <label name="salario"  for="">Salario: </label>
                            <input id="input_salario" name="salario" required type="number" >
                        </div>
                    </div>
                    <div id="sub_container_down" >
     
                        <div class="inputs" >
                            <label for="senha">Senha: </label>
                            <input id="input_senha" name="senha"   required type="password"  >
                        </div>

                        <div class="inputs"  id="buttons" >
                            <a  id="link_return" href="funcionarios.php">RETORNAR</a>
                            <input id="input_submit" type="submit" value="CADASTRAR" >
                            
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </main>
</body>
</html>
