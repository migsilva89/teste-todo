<?php
include (__DIR__.'/../partials/template-head.php');
include (__DIR__.'/../partials/nav-auth.php');
?>

<!-- BACK BUTTON -->
   
<div class="md:pt-24 drop-shadow-2xl md:px-36 px-16 justify-center items-center ">
    <form action="system.php" method="POST">
        <!-- ADD TODO FORM:: -->
        <div class="p-4 flex bg-white md:text-left text-center rounded-xl mb-36">      
            <input type="text" name="addTodo" id="addTodo" class="inputTodo md:text-left text-center border-solid border-2 rounded-lg w-full  border-red-300 p-2" placeholder="Add Your Task" required>
            <label for="addTodo" class="addTodo"></label>
            <p class="pl-4 text-center">
            <input class="cursor-pointer  hover:bg-red-300 hover:shadow-xl border-2 p-2 rounded-xl text-white bg-red-400 px-8" type="submit" name="submit" id="submit" value="Add Task">
            </p>
        </div>
    </form>

    <div class="bg-white rounded-xl w-full">
        <!-- LACO DE REPETICAO DENTOR DO BODY DE FORMA A EXPOR CADA UM DOS REGISTOS DA TABELA -->
       <ul class="divide-y rounded-xl divide-gray-200">
            <?php 
                while($user_data = mysqli_fetch_assoc($result))
                {
                    //VERDADEIRO DO IF : FALSE TO IF 
                    $className = $user_data['is_done'] ? 'line-through' : ''; 
                    // $buttonLable = $user_data['is_done'] ? 'Undone' : 'Done';
                    $button = '';
                    $titleExtraClass = '';

                    if ($user_data['is_done'] == 0 ) 
                    {
                        $button = '<p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Done</p>';
                    }
                    else 
                    {
                        $titleExtraClass.='line-through';
                        $button = '<p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Undone</p>';
                    }

                    echo '<li >
                    <div class="block hover:bg-gray-100 hover:rounded-xl">
                      <div class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                          <p class="text-xl font-medium text-red-400  ' . $titleExtraClass . '">
                          ' . $user_data['task_desc'] . '
                          </p>
                          <div class="ml-2 flex-shrink-0 flex">
                          <a href="edit.php?id=' . $user_data['id'] . '&action=done">
                           ' . $button . '
                           </a>
                          </div>
                        </div>
                        <div class="mt-2 sm:flex sm:justify-between">
                          <div class=" sm:flex">
                            <p class="flex items-center text-sm text-gray-500">
                              <a href="edit.php?id=' . $user_data['id'] . '"> Edit </a>
                            </p>
                            <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                               <a href="edit.php?id=' . $user_data['id'] . '&action=delete"> Delete </a>
                            </p>
                          </div>
                          <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                            <p>
                            ' . $user_data['input_date'] . '
                              <time :datetime="position.closeDate"></time>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>';
                }
            ?>
       </ul>
    </div> 
</div>
<?php
 include (__DIR__.'/../partials/template-head-close.php'); 
?>