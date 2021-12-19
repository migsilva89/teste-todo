<?php 
    //SESSAO DE LOGIN SE TIVER LOGADO MANTEM SEMPRE NA SESSAO SE NAO VOLTA SEMPRE PARA O LOGIN.PHP::

    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    $result = $conexao->query($sql);
?>

<!-- AQUI VAMOS ADICIONAR CONEXAO DB PARA A TODO TABLE:: -->
<?php 
    
    // if(isset($_POST['submit'])) 
    // {
    // include_once('config.php');
    // }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SYSTEM</title>
</head>
<body>
    <form action="system.php" method="POST">
        <?php
        // ASSIM VAI BUSCAR O EMAIL DO USAR PARA EXPOR: $logado = userEmail::
        echo "<h1>Welcome $logado</h1>";
        ?>

        <!-- ADD TODO FORM:: -->
        <br></br>
        <div class="inputBox">      
            <input type="text" name="addTodo" id="addTodo" class="inputTodo" required>
            <label for="addTodo" class="addTodo">Type your todo and submit</label>
        </div>

        <br></br>
        <input type="submit" name="submit" id="submit" placeholder="Submit">

        <br></br>
        <div>
            <a href="sair.php" class=""> SAIR </a>
        </div>
    </form>
</body>
</html>