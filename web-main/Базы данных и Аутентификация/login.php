<?php
    require_once ("connect.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $email = $_POST['mail'];
        $pass = $_POST['pass'];

        $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
        if($result->num_rows == 0){
            $_SESSION['log_error'] = 'Пользователь не найден';
            header("Location: login_page.php");
            exit();
        }

        $user = $result->fetch_assoc();
        $_SESSION['email'] = $user['email'];
        $_SESSION['name'] = $user['name'];
        $pass_hash = $user['password'];
        $_SESSION['authenticated'] = true;

        if(!password_verify($pass, $pass_hash)){
            header("Location: login_page.php");
            $_SESSION['log_error'] = 'Неверный пароль или почта';
            exit();
        }

        $cookie_name = 'username';
        $cookie_value = $email;
        $exp_time = time() + (24 * 60 * 60);
        setcookie($cookie_name, $cookie_value, $expiration_time);
        header("Location: user_page.php");
        exit();
    } else{
        $_SESSION['log_error'] = 'Ошибка авторизации';
        header("Location: login_page.php");
        exit();
    }
?>