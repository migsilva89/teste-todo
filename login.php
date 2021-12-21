
<?php 
    // COMECAR SESSAO::::
    
    session_start();

    // SE NAO EXISTIR ele volta para o LOGIN.PHP
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
       // SE ENCONTRA SUBMIT ele ACESSA
        //Inlcuir configs db:
        include_once('config.php'); 
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // VERIFICAR SE NA NOSSA DB EXISTE O EMAIL E PASSWORD DA ADICIONADOS::
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        // CONNECTAR O SELECT FROM ALL A NOSSA CONEXAO::
        $result = $conexao->query($sql);
        // TESTAR RESULTADO com print_R::

        // FAZER LOOP PARA SE EXISTE OU NAO OS DADOS NA nossa ROW
        if(mysqli_num_rows($result) < 1)
        {   
            // SE NAO VOLTA PARA LOGIN
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
            exit;
        }
        // SE SIM MANDA PARA SYSTEM.PHP
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: system.php');
        exit;
    }
?>

<?php

include ('pages/login.php');
