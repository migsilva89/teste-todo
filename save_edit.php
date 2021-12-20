<?php

    if(isset($_POST['update']))

    include_once('config.php');
    {
        $task_desc = $user_data['task_desc'];
        
        $sqlUpdate = "UPDATE todos_table SET task_desc='$task_desc' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: system.php');

?>