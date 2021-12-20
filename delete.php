<?php 

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = (int) $_GET['id'];

        
        if(empty($_GET['id']) || $_GET['id']  === '' || $id <= 0){
            header('Location: system.php');
            exit;
        }

        $sqlSelect = sprintf("SELECT * FROM todos_table WHERE id=%s",$id);
        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM todos_table WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
            
        }
        header('Location: system.php');
    }

?>