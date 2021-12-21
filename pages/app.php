<?php
include (__DIR__.'/../partials/template-head.php');
include (__DIR__.'/../partials/nav-auth.php');
?>

<!-- BACK BUTTON -->
   
<div class="md:pt-36 drop-shadow-2xl md:px-36 px-16 justify-center items-center ">
    <form action="system.php" method="POST">
        <!-- ADD TODO FORM:: -->
        <div class="p-4 bg-white md:text-left text-center rounded-xl mb-36">      
            <input type="text" name="addTodo" id="addTodo" class="inputTodo md:text-left text-center border-solid border-2 rounded-lg w-full  border-red-300 p-2" placeholder="Add Your Task" required>
            <label for="addTodo" class="addTodo"></label>
            <p class="pt-4 text-center">
            <input class="cursor-pointer  hover:bg-red-300 hover:shadow-xl border-2 p-2 rounded-xl text-white bg-red-400 px-8" type="submit" name="submit" id="submit" value="Add Task">
            </p>
        </div>
    </form>

    <table>
        <!-- LACO DE REPETICAO DENTOR DO BODY DE FORMA A EXPOR CADA UM DOS REGISTOS DA TABELA -->
       <tbody>
            <?php 
                while($user_data = mysqli_fetch_assoc($result))
                {
                    //VERDADEIRO DO IF : FALSE TO IF 
                    $className = $user_data['is_done'] ? 'line-through' : ''; 
                    $buttonLable = $user_data['is_done'] ? 'Undone' : 'Done';

                    echo '<tr>';
                    echo '<td>' . $user_data['id'] . '</td>';
                    echo '<td class=" ' . $className . ' ">' . $user_data['task_desc'] . '</td>';
                    echo '<td>' . $user_data['input_date'] . '</td>';
                    echo '<td>' . $user_data['is_done'] . '</td>';
                    echo 
                        '<td>
                            <a class="" href="edit.php?id=' . $user_data['id'] . '"> 
                            Edit
                            </a>
                            <a class="" href="edit.php?id=' . $user_data['id'] . '&action=delete"> 
                            Delete
                            </a>
                            <a class="" href="edit.php?id=' . $user_data['id'] . '&action=done"> 
                            ' . $buttonLable . '
                            </a>
                        </td>';
                    echo '<tr>';
                }
            ?>
       </tbody>
    </table> 
</div>
<?php
 include (__DIR__.'/../partials/template-head-close.php'); 
?>