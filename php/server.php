<?php

    session_start();

    $username = "";
    $email = "";
    $errors = array();

    // connect to the database

    $db = mysqli_connect('localhost', 'root', '', 'gamers_united') or die($db);

    // if the registration button is clicked

    if (isset($_POST['reg_user'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

        // ensure that form fields are filled properly
        
        if(empty($username)){
            array_push($errors, "É exigido um Nome de Usuário");
        }
        if(empty($email)){
            array_push($errors, "É exigido um Email");
        }
        if(empty($password_1)){
            array_push($errors, "É exigido uma Senha");
        }
        if($password_1 != $password_2){
            array_push($errors, "As senhas não coincidem");
        }

        // if there are no errors, save user to database

        if(count($errors) == 0){
            $password = md5($password_1); //encrypts the password before storing
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password_1')";
            mysqli_query($db, $sql);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Você está logado";
            header('location: index.php');
        }
    }

    // log user from login page


    if (isset($_POST['login_user'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        // ensure that form fields are filled properly
        
        if(empty($username)){
            array_push($errors, "É exigido um Nome de Usuário");
        }
        if(empty($password)){
            array_push($errors, "É exigido uma senha");
        }
        if(count($errors) == 0){
            $password = md5($password); //encrypts the password before comparing with the db
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($db, $query);
            $num = mysqli_num_rows($result);
            if($num == 1){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "Você está logado";
                header('location: index.php');
            }else{
                array_push($errors, "O Nome de Usuário ou Senha está incorreto");
                header('location: login.php');
            }
        }
    }

    // logout

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>