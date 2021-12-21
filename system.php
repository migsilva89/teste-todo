
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
    
    if(isset($_POST['submit'])) 
    {
        // TESTE:
        // print_r('task_desc: ' . $_POST ['addTodo']);

        include_once('config.php');

        $task_desc = $_POST['addTodo'];
        // print_r($task_desc);

        $result = mysqli_query($conexao, "INSERT INTO todos_table(task_desc)
        VALUES ('$task_desc')");
        
        // echo ("ADDED");
        // header('Location: list.php');
        // ENCAMINHAR PARA SYSTEM DE FORMA A PAGINA FAZER RELOAD::
        header('Location: system.php');
    }
?>

<!-- CONECTAR TASKS_TABLE_DB TO OUR VIEW -->
<?php
    
    $sql = "SELECT * FROM todos_table ORDER BY input_date ASC";

    include_once('config.php');
    $result = $conexao->query($sql);

    // TESTAR CONEXAO A RESULT
    // print_r($result);

?>

<!-- PAGES: -->
<?php
    include('pages/app.php');
   
