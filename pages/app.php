<?php
include (__DIR__.'/../partials/template-head.php');
include (__DIR__.'/../partials/nav-auth.php');
?>

<form action="system.php" method="POST">
      
        <!-- ADD TODO FORM:: -->
        <br></br>
        <div>      
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
                <th >No</th>
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
                            <a class='' href='edit.php?id=$user_data[id]&action=delete'> 
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

<?php
 include (__DIR__.'/../partials/template-head-close.php'); 
?>