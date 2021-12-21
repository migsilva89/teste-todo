<?php
    include (__DIR__.'/../partials/template-head.php');
?>
    <div data-aos="fade-down-right"
     data-aos-duration="1000"  class="p-16 md:text-left text-center">
        <a class="border-2 p-2 rounded-xl text-white hover:text-xl hover:bg-shadow-2xl bg-red-400 px-8" 
            href="system.php"
        >Back
        </a>
    </div>

    <form action="edit.php?id=<?php echo $id;?>" method="POST" class="p-16 md:text-left text-center">
        <div class="inputBox p-4 flex bg-white md:text-left text-center rounded-xl mb-28">      
            <input 
                type="text" 
                name="task_desc" 
                id="task_desc" 
                class="hover:bg-gray-100 inputTodo md:text-left text-center border-solid border-2 rounded-lg w-full  border-red-300 p-2" 
                value="<?php echo $task_desc?>" 
                required
            >
            <label for="task_desc" class="">
            <p class="pl-4 text-center">
            <input class="cursor-pointer hover:bg-red-300 hover:shadow-xl border-2 p-2 rounded-xl text-white bg-red-400 px-8" type="submit" name="submit" id="submit" value="Add Task">
            </p>
            </label>
        </div>
    </form>

   

<!-- SCRIPT AOS CDN -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>

        AOS.init({
        duration: 1000,
        })

    </script>
    
            
            

<?php
 include (__DIR__.'/../partials/template-head-close.php'); 
?>