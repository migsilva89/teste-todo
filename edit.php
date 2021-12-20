<!-- AQUI VAMOS ADICIONAR CONEXAO DB PARA A TODO TABLE:: -->
<?php 
    
    // if(!empty($_GET['id']))
    // {
    
    //     include_once('config.php');

    //     $id = $_GET['id'];

    //     $sqlSelect = "SELECT * FROM todos_table WHERE id=$id";

    //     $result = $conexao->query($sqlSelect);

    //     $task_desc = $_POST['addTodo'];

    //     print_r($result);
        
    // }

    
    if(!empty($_GET['id']))
    {
    
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM todos_table WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $task_desc = $user_data['task_desc']; 
            }
        }
        else 
        {
            header('Location: system.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP</title>
</head>
<body>

    <form action="system.php" method="POST">
    <!-- ADD TODO FORM:: -->
        <br></br>
        <div class="inputBox">      
            <input type="text" name="addTodo" id="addTodo" class="inputTodo" value="<?php echo $task_desc?>" required>
            <label for="addTodo" class="addTodo">Type your todo and submit</label>
        </div>

        <br></br>
        <input type="submit" name="submit" id="submit" placeholder="Submit">
    </form>

    <br></br>

    <div>
        <a href="system.php" class=""> BACK </a> 
    </div>

</body>
</html>