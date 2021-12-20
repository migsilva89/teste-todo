
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
    
    if(isset($_POST['submit'],)) 
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
    
    $sql = "SELECT * FROM todos_table ORDER BY input_date DESC";

    include_once('config.php');
    $result = $conexao->query($sql);

    // TESTAR CONEXAO A RESULT
    // print_r($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <form action="system.php" method="POST">
        <?php
        // ASSIM VAI BUSCAR O EMAIL DO USER PARA EXPOR: $logado = userEmail::
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
    </form>

    <br></br>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Task</th>
                <th>DateAdded</th>
                <th>Is_done</th>
                <th>Settings</th>
            </tr>
        </thead>
        <!-- LACO DE REPETICAO DENTOR DO BODY DE FORMA A EXPOR CADA UM DOS REGISTOS DA TABELA -->
       <tbody>
            <?php 
                while($user_data = mysqli_fetch_assoc($result))
                {
                    //VERDADEIRO DO IF : FALSE TO IF 
                    $className = $user_data['is_done'] ? 'underline' : ''; 
                    $buttonLable = $user_data['is_done'] ? 'undone' : 'done';

                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td class='$className'>".$user_data['task_desc']."</td>";
                    echo "<td>".$user_data['input_date']."</td>";
                    echo "<td>".$user_data['is_done']."</td>";
                    echo 
                        "<td>
                            <a class='' href='edit.php?id=$user_data[id]'> 
                            Edit
                            </a>
                            <a class='' href='delete.php?id=$user_data[id]'> 
                            Delete
                            </a>
                            <a class='' href='edit.php?id=$user_data[id]&action=done'> 
                            $buttonLable
                            </a>
                        </td>";
                    echo "<tr>";
                }
            ?>
       </tbody>
    </table> 
    
    <br></br>

    <div>
        <a href="sair.php" class=""> SAIR </a> 
    </div>

</body>
</html>