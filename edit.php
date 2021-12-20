<!-- AQUI VAMOS ADICIONAR CONEXAO DB PARA A TODO_TABLE:: -->
<?php 
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

<?php 
   
   if(!empty($_GET['id']) && $_POST['task_desc'])
   { 
    //    var_dump('Cheguei aqui',$_POST);
    //    exit;

       include_once('config.php');

       $id = $_GET['id'];

       $task_desc = $_POST['task_desc'];

       $sqlUpdate = "UPDATE todos_table SET task_desc='$task_desc' WHERE id='$id'";

       $result = $conexao->query($sqlUpdate);

       header('Location: system.php');
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>

    <form action="edit.php?id=<?php echo $id;?>" method="POST">
    <!-- ADD TODO FORM:: -->
        <br></br>
        <div class="inputBox">      
            <input type="text" name="task_desc" id="task_desc" class="inputTodo" value="<?php echo $task_desc?>" required>
            <label for="task_desc" class="task_desc">Edit your todo and submit</label>
        </div>
        <br></br>
        <input type="submit" name="update" id="update">
    </form>

    <br></br>

    <div>
        <a href="system.php" class=""> BACK </a> 
    </div>

</body>
</html>