<!-- AQUI VAMOS ADICIONAR CONEXAO DB PARA A TODO_TABLE:: -->
<?php 

    if(empty($_GET['id']))
    {
        header('Location: system.php');
        exit;
    }

    include_once('config.php');

    // Get from query. Ex ?id=21313&ganza=true
    $id = (int) $_GET['id'];

    // The user sent an empty id or invalid one.
    if(empty($_GET['id']) || $_GET['id']  === '' || $id <= 0)
    {
        header('Location: system.php');
        exit;
    }

    // Always select the record from database
    $sqlSelect = sprintf("SELECT * FROM todos_table WHERE id=%s",$id);
    $result = $conexao->query($sqlSelect);

    // If record was not found, kill
    if($result->num_rows <= 0)
    {
        header('Location: system.php');
        exit;
    }
    
    // Associate the DB record with PHP variable
    // $user_data holds the row data comming from the database.
    $user_data = $result->fetch_assoc(); // Single row only.
    $task_desc = $user_data['task_desc']; 
    $is_done = $user_data['is_done'];

    // TOOGLE DONE/NOTDONE
    if(!empty($_GET['action']) && $_GET['action'] == 'done')
    {
        $sqlUpdate = sprintf
        (
            "UPDATE todos_table SET is_done='%s', input_date = NOW() WHERE id='%s'",
            $is_done == 1 ? 0 :1,
            $id
        );

        $result = $conexao->query($sqlUpdate);

        header('Location: system.php');
        exit;
    }



    // Its an update fella! Lets go.
    if($_POST['task_desc'])
    {
        // Do not trust user inputs, awlays be safe and pass to mysql_real_escape_string
        $descFiltered = $conexao->real_escape_string($_POST['task_desc']);

        // Usar %s que vai ser substituido pelas variaveis
        $sqlUpdate = sprintf(
            "UPDATE todos_table SET task_desc='%s', input_date = NOW() WHERE id='%s'",
            $descFiltered,
            $id
        );

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
        <div class="inputBox">      
            <input 
                type="text" 
                name="task_desc" 
                id="task_desc" 
                class="" 
                value="<?php echo $task_desc?>" 
                required
            >
            <label 
                for="task_desc" 
                class=""
            >
            Edit your todo and submit
            </label>
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