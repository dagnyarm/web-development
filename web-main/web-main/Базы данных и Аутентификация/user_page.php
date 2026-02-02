<?php
    session_start();

    if(!isset($_SESSION['authenticated'])){
        header("Location: login_page.php");
        exit();
    }

    unset($_SESSION['reg_error']);
    unset($_SESSION['log_error']);

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];

?>

<style>
    body{
        font-family: sans-serif;
        padding: 30px 100px 30px 100px;
    }
    #profile{
        height: 100px;
        width: fit-content;
        box-shadow: 0px 5px 20px -1px rgba(34, 60, 80, 0.2);
        border-color: transparent;
        border-radius: 30px;
        display: flex;
        justify-content: top;
        padding: 30px 50px 30px 50px;
        gap: 50px;
    }

    #avatar{
        height: 100px;
        width: 100px;
        overflow: hidden;
        border-radius: 50px;
        background-color: dodgerblue;
    }

    #info{
        font-size: 20px;
    }

    #mail{
        font-size: 13px;
        color: dodgerblue;
    }

    #logout{
        height: 30px;
        width: 80px;
        border-color: transparent;
        border-radius: 10px;
        background-color: dodgerblue;
        color: white;
        font-size: 15px;
    }
</style>

<section id="profile">
    <div id="avatar"></div>
    <section id="info">
        <p class="info"><?php echo htmlspecialchars($name);?></p>
        <p class="info" id="mail"><?php echo htmlspecialchars($email);?></p>
    </section>
    <a href="login_page.php">
        <button id="logout">Выйти ></button>
    </a>
</section>