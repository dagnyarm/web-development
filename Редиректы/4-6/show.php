<?php
    require "connect.php";
    if($_SERVER["REQUEST_METHOD"] === "GET"){
        if(isset($_GET['id'])){
            $id = (int)$_GET['id'];
            $sql = "SELECT * FROM users WHERE id = $id";
            $result = $conn->query($sql);

            if($result){
                $user = $result->fetch_assoc();
                echo "<div>";
                echo "<p>Имя: <span class=\"name\">" . $user['name'] . "</span></p>";
                echo "<p>Возраст: <span class=\"age\">" . $user['age'] . "</span>, 
                Зарплата: <span class=\"salary\">" . $user['salary'] . "</span> </p>";
                echo "</div>";
                echo "<a href=\"index.php\">Вернуться</a>";
                echo "<a href=\"delete.php?id=" . $id . "\">Удалить</a>";
                echo "<a href=\"edit.php?id=" . $id . "\">Редактировать</a>";
            }
            else{
                echo "Error Not Found";
            }

        }
    }
?>