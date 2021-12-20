<?php
include (__DIR__.'/../partials/template-head.php');
?>

<a href="home.php">Back</a>
    <div>
        <h1>Login</h1>
        <!-- ADICIONAR METHOD POST PARA GUARDAR INFO  -->
        <form method="POST" action="login.php">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" value="Enviar" name="submit">
        </form>
    </div>

<?php
 include (__DIR__.'/../partials/template-head-close.php'); 
?>