<?php
include (__DIR__.'/../partials/template-head.php');
?>
<!-- ADICIONAR BACK BUTTON  -->
<a href="home.php">Back</a>
    <div>
        
        <form action="register.php" method="POST">
            <fieldset>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>

                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    
<?php
 include (__DIR__.'/../partials/template-head-close.php'); 
?>