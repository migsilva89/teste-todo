<?php
include (__DIR__.'/../partials/template-head.php');
?>


<div>
    <div class="p-16 md:text-left text-center">
        <a class="border-2 p-2 rounded-xl text-white hover:text-xl hover:bg-shadow-2xl bg-red-400 px-8" 
            href="home.php"
        >Back
        </a>
    </div>

    <div class="md:pt-64 drop-shadow-2xl flex justify-center items-center " >
        <div class="grid-rows-2">

            <!-- ROW 1 == IMAGEM -->
            <div    
                class="rounded-t-xl bg-cover h-64 md:w-96 w-72 bg-no-repeat" 
                style="background-image: url('https://images.unsplash.com/photo-1501504905252-473c47e087f8?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxyYW5kb218MHx8dGFzayx3b3JrLGxpc3R8fHx8fHwxNjQwMDg1MjI3&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1080')"
            >
            </div>
            
            <!-- ROW 2 == CONTENT -->
            <div class="bg-white md:text-left text-center rounded-b-xl">
                
                <form method="POST" action="login.php">
                    <div class="pb-6 drop-shadow-2xl">
                        <h1 class="text-4xl font-bold md:pl-4 pt-4"
                        >Welcome
                        </h1>
                        <h2 class="md:pl-4"
                        >Let's get started!
                        </h2>
                    </div>

                    <div class="pl-4 pr-4 pb-8 drop-shadow-xl">
                        <div class="pb-4">
                            <input class="border-solid border-2 rounded-lg w-full  border-red-300 p-2" type="email" name="email" placeholder="Email">
                        </div>
                        <div>
                            <input class="cursor-pointer border-solid border-2 rounded-lg w-full border-red-300 p-2" type="password" name="senha" placeholder="Senha">
                        </div>
                    </div>

                    <div class="md:pl-4 pb-8  ">
                        <input class="inputSubmit cursor-pointer  hover:bg-red-300 hover:shadow-xl border-2 p-2 rounded-xl text-white bg-red-400 px-8" type="submit" value="Login" name="submit">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>     









<?php
 include (__DIR__.'/../partials/template-head-close.php'); 
?>