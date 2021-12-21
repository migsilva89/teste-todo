<?php
    include (__DIR__.'/../partials/template-head.php');
    include (__DIR__.'/../partials/nav-auth.php');
?>

    <form action="edit.php?id=<?php echo $id;?>" method="POST">
        <div class="inputBox ">      
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

<?php
 include (__DIR__.'/../partials/template-head-close.php'); 
?>