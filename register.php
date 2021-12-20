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

<?php

include ('pages/register.php');
