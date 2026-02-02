<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['name']); 
    unset($_SESSION['authenticated']);   
?>

<form action="register.php" method="POST">
    <h3>Регистрация</h3>
    <h4 style="color: red; margin: 0px"><?php if(isset($_SESSION['reg_error'])){echo htmlspecialchars($_SESSION['reg_error']);}else{echo '';} ?></h4>
    <input type="text" name="name" placeholder="Имя" value="<?php if(isset($_COOKIE['username'])){ echo htmlspecialchars($_COOKIE['username_cookie']);} ?>">
    <input type="email" name="mail" placeholder="E-mail">
    <input type="password" name="pass" placeholder="Пароль">
    <input type="submit" id="submit">
</form>


<form action="login.php" method="POST">
    <h3>Войти</h3>
    <h4 style="color: red; margin: 0px"><?php if(isset($_SESSION['log_error'])){echo htmlspecialchars($_SESSION['log_error']);}else{echo '';} ?></h4>
    <input type="email" name="mail" placeholder="E-mail">
    <input type="password" name="pass" placeholder="Пароль">
    <input type="submit" id="submit">
</form>

<style>
    body{
        font-family: sans-serif;
        font-size: 18px;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        gap: 50px;
        padding-top: 100px;
    }

    form{
        padding: 30px;
        display: flex;
        flex-direction: column;
        background: white;
        box-shadow: 0px 0px 20px 0px rgba(34, 60, 80, 0.2);
        width: 300px;
        gap: 30px;
        border-radius: 30px;
        align-items: center;
    }
    
    input{
        width: 100%;
        height: 40px;
        font-size: 18px;
        border: none;
        border-radius: 30px;
        box-shadow: 0px 0px 20px 0px rgba(34, 60, 80, 0.2);
        padding-left: 15px;
    }

    #submit{
        color: white;
        background-color: #F5B027;
    }
</style>