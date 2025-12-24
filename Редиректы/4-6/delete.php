<?php
    require "connect.php";
    if($_SERVER["REQUEST_METHOD"] === "GET"){
        if(isset($_GET['id'])){
            $id = (int)$_GET['id'];
            $sql = "DELETE FROM users WHERE id = $id";
            $result = $conn->query($sql);
            if ($result === TRUE) {
                if ($conn->affected_rows > 0) {
                    echo "✅ Запись с ID $id успешно удалена. Перенаправление...";
                    header("Location: index.php");
                    exit();
                } else {
                    // Это происходит, если ID не найден в таблице
                    echo "⚠️ Предупреждение: Запись с ID $id не найдена в базе данных.";
                }
            } else {
                echo "Ошибка удаления: " . $conn->error;
            }
        }
    }
?>