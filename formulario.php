<?php 
    // IF STATMENT PARA CORRER O METHOD $POST::
    if(isset($_POST['submit'])) 
    {
        // INCLUIR O NOSSO CONFIG.PHP::
        include_once('config.php');

        // DIZER QUE VARIAVEIS DA DB SAO AS DO $_POST::
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        // dps encaminhamos para a DB com o MYSQSL QUERY migrando as viaraveis para os respectivos campos::
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,data_nasc,cidade,estado,endereco)
        VALUES ('$nome','$senha','$email','$telefone','$data_nasc','$cidade','$estado','$endereco')");
        
        // TESTAR CONEXAO AO INSERT_INTO
        // echo mysqli_error($conexao);

        // SE FOR VALIDO VOLTA PARA O LOGIN::
        header('Location: login.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTE TODO APP PHP</title>

</head>
<body>
    <!-- ADICIONAR BACK BUTTON  -->
    <a href="home.php">Back</a>
    <div>
        <!-- FORM COM METHOD POST PARA SACAR A INFO -->
        <form action="formulario.php" method="POST">
            <fieldset>
                <!-- <legend><b></b></legend> -->
                
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>

                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html> 