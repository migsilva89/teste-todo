<!-- HOME VIEW GUESTS-->
<?php
include (__DIR__.'/../partials/template-head.php');
?>

<divclass=" w-auto h-screen bg-cover" style="background-image: url('images/background_home.svg')">
    <div class="md:p-24 pt-24 grid md:grid-cols-2 grid-cols-1 grid-rows-4">
        <!-- COLUNA ESQUERDA  -->
        <div data-aos="fade-right" class="text-white text-center md:text-left font-bold md:text-4xl text-3xl">
            Controla as tuas tarefas!
            <p>Gere a tua vida!</p>
            Faz "tudo"
            <br><br>
            <hr class="hidden md:block">
        </div>
        <!-- COLUNA DIREIRA -->
        <div data-aos="fade-left" class="md:text-right text-center md:absolute md:bottom-32 md:right-20 "> 
            <div class="pb-16 md:text-8xl text-6xl font-extrabold justify-self-start ">
                FAZ TO-DO
            </div>
            <!-- BUTTOES -->
            <div class="md:text-xl text-xm drop-shadow">
                <a class="order-last border-2 hover:bg-red-400 hover:text-2xl hover:shadow-xl p-4 rounded-2xl text-white" href="login.php">Login</a>
                <a class="border-2 p-4 hover:text-2xl hover:bg-red-400 hover:shadow-xl rounded-2xl text-white" href="register.php">Cadastre-se</a>
            </div>
        </div>

    </div>
</div>

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