<?php 
    // COMECAR SESSAO::::
    session_start();

    // testar a coneccao ao login.php com print_r::
    // print_r($_REQUEST);
    
        // verificar se formulario foi submitado::
        if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
        {
            // SE ENCONTRA SUBMIT ele ACESSA
            //Inlcuir configs db:
            include_once('config.php'); 
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            // TESTAR VARIAVEIS com PRINT_R
            // print_r('Email: ' . $email);
            // print_r('<br>');
            // print_r('Password: ' . $senha);

            // VERIFICAR SE NA NOSSA DB EXISTE O EMAIL E PASSWORD DA ADICIONADOS::
            $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

            // CONNECTAR O SELECT FROM ALL A NOSSA CONEXAO::
            $result = $conexao->query($sql);
            // TESTAR RESULTADO com print_R::
            // print_r($result);
            // print_r($sql);
        

            // FAZER LOOP PARA SE EXISTE OU NAO OS DADOS NA nossa ROW
            if(mysqli_num_rows($result) < 1)
            {   
                // SE NAO VOLTA PARA LOGIN
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                header('Location: login.php');
            }
            else 
            {
                // SE SIM MANDA PARA SYSTEM.PHP
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                header('Location: system.php');
            }
        // SE NAO EXISTIR ele volta para o LOGIN.PHP
        }
        else
        {
            header('Location: login.php');
        }
        
?>



