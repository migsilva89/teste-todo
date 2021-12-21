<?php
include (__DIR__.'/../partials/template-head.php');
?>
<!-- ADICIONAR BACK BUTTON  -->

    <div>
        <!-- BACK BUTTON -->
        <div class="p-16 md:text-left text-center">
            <a class="border-2 p-2 rounded-xl text-white hover:text-xl hover:bg-shadow-2xl bg-red-400 px-8" 
                href="home.php"
            >Back
            </a>
        </div>

        <form class="md:pt-36 drop-shadow-2xl justify-center flex items-center "  action="register.php" method="POST">
            <fieldset class="grid-rows-2 " >

                <div    
                    class="rounded-t-xl bg-cover h-64 md:w-96 w-72 bg-no-repeat" 
                    style="background-image: url('https://images.unsplash.com/photo-1501504905252-473c47e087f8?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxyYW5kb218MHx8dGFzayx3b3JrLGxpc3R8fHx8fHwxNjQwMDg1MjI3&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1080')"
                >
                </div>

                <div class="p-4 bg-white md:text-left md:w-96 w-72 text-center rounded-b-xl mb-36 ">

                    <div class="pb-6 drop-shadow-2xl">
                        <h1 class="text-4xl font-bold md:pl-4 pt-4"
                        >Registration Form
                        </h1>
                        <h2 class="md:pl-4"
                        >Fill your data to start now !
                        </h2>
                    </div>

                    <div class="pt-2 mx-4 grid grid-rows-4 grid-flow-col gap-4">
                        <div class="inputBox ">
                            <input type="text" name="nome" id="nome" class="inputUser md:text-left text-center border-solid border-2 rounded-lg w-full  border-red-300 p-2" placeholder="Insert your Name" required>
                        </div>

                        <div class="inputBox">                                           
                            <input type="password" name="senha" id="senha" class="inputUser md:text-left text-center border-solid border-2 rounded-lg w-full  border-red-300 p-2" placeholder="Insert your Password"  required>                        
                        </div>

                        <div class="inputBox">                                              
                            <input type="text" name="email" id="email" class="inputUser md:text-left text-center border-solid border-2 rounded-lg w-full  border-red-300 p-2" placeholder="Insert your Email"  required>                      
                        </div>
                        
                        <div class="inputBox">
                            <input type="text" name="cidade" id="cidade" class="inputUser md:text-left text-center border-solid border-2 rounded-lg w-full  border-red-300 p-2" placeholder="Insert your City"  required>                      
                        </div>

                    </div>

                    <div class="pt-8 pb-4 pl-3">
                        <input class="cursor-pointer  hover:bg-red-300 hover:shadow-xl border-2 p-2 rounded-xl text-white bg-red-400 px-8" value="Sign In" type="submit" name="submit" id="submit">
                    </div>

                </div>
                
            </fieldset>
        </form>
    </div>

<?php
 include (__DIR__.'/../partials/template-head-close.php'); 
?>