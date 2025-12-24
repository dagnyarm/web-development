<?php
    session_start();
    require "connect.php";
    if($_SERVER["REQUEST_METHOD"] === "GET"){
        if(isset($_GET['id'])){
            $id = (int)$_GET['id'];
            $sql = "SELECT * FROM users WHERE id = $id";
            $result = $conn->query($sql);
            if ($result) {
                $user = $result->fetch_assoc();
            } else {
                echo "Ошибка: " . $conn->error;
            }
        }
    }
?>

<form action="save.php?id=<?php echo htmlspecialchars($user['id'])?>" method="POST">
    <h3>Редактировать пользователя</h3>
    <h4 style="color: red; margin: 0px"><?php if(isset($_SESSION['add_error'])){echo htmlspecialchars($_SESSION['add_error']);}else{echo '';} ?></h4>
    <input type="text" name="name" placeholder="Имя" value="<?php echo htmlspecialchars($user['name']) ?>">
    <input type="number" name="age" placeholder="Возраст" value="<?php echo htmlspecialchars($user['age']) ?>">
    <input type="number" name="salary" placeholder="Зарплата" value="<?php echo htmlspecialchars($user['salary']) ?>">
    <input type="submit" id="submit">
</form>

<h2><?php if(isset($_SESSION['success'])){echo htmlspecialchars($_SESSION['success']);}?></h2>
<a href="show.php?id=<?php echo htmlspecialchars($user['id'])?>">Вернуться</a>