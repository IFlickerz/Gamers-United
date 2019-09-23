<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GamersUnited - Log in</title>
</head>
<body>
    
    <div class="container">

        <div class="header">

            <h2>Log in</h2>

        </div>

        <form action="login.php" method="POST">
            <!-- display errors -->
            <?php include('errors.php'); ?>
            <div>
                <label for="username">Nome de Usuário:</label>
                <input type="text" name="username">
            </div>
            <div>
                <label for="password">Senha:</label>
                <input type="password" name="password">
            </div>

            <button type="submit" name="login_user" class="btn">Log in</button>

            <p>Não possui uma conta? <a href="register.php"><b>Registre-se</b></Log></a></p>
        </form>

    </div>

</body>
</html>