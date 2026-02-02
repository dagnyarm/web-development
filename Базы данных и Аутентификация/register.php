<?php
    require_once ("connect.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $name = $_POST['name'];
        $email = $_POST['mail'];
        $pass = $_POST['pass'];

        $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
        if($result->num_rows > 0){
            $_SESSION['reg_error'] = 'Пользователь с таким email уже существует';
            header("Location: login_page.php");
            exit();
        }

        $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['authenticated'] = true;

        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pass_hash')";
        $result = $conn->query($sql);
        if($result){
            header("Location: user_page.php");
            exit();
        }

        $cookie_name = 'username';
        $cookie_value = $email;
        $exp_time = time() + (24 * 60 * 60);
        setcookie($cookie_name, $cookie_value, $expiration_time);
        header("Location: user_page.php");
        exit();
    } else{
        $_SESSION['reg_error'] = 'Ошибка регистрации';
        header("Location: login_page.php");
        exit();
    }
?>