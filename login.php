<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
   
</head>
<body>
    <a href="home.php">Back</a>
    <div>
        <h1>Login</h1>
        <!-- ADICIONAR METHOD POST PARA GUARDAR INFO  -->
        <form method="POST" action="testLogin.php">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" value="Enviar" name="submit">
        </form>
    </div>
</body>
</html>