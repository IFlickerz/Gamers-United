<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GamersUnited - Registre-se</title>
</head>
<body>
    
    <div class="container">

        <div class="header">

            <h2>Registrar-se</h2>

        </div>

        <form method="POST" action="register.php">
            <!-- display errors -->
            <?php include('errors.php'); ?>
            <div>
                <label for="username">Nome de Usuário:</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div>
                <label for="password_1">Senha:</label>
                <input type="password" name="password_1">
            </div>
            <div>
                <label for="password_2">Confirme sua Senha:</label>
                <input type="password" name="password_2">
            </div>
            <div>
                <button type="submit" name="reg_user" class="btn">Registrar</button>
            </div>
            <p>Já possui uma conta? <a href="login.php"><b>Log in</b></a></p>
        </form>

    </div>

</body>
</html>