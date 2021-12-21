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
        $cidade = $_POST['cidade'];
        
        // dps encaminhamos para a DB com o MYSQSL QUERY migrando as viaraveis para os respectivos campos::
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,cidade)
        VALUES ('$nome','$senha','$email','$cidade')");

        // SE FOR VALIDO VOLTA PARA O LOGIN::
        header('Location: login.php');
    }
?>

<?php
    include ('pages/register.php');
?>