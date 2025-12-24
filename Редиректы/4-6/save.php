<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        require "connect.php";
        $id = (int)$_GET['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];

        //$sql = "UPDATE users SET name = '$name', age = $age, salary = $salary WHERE id = $id"; не безопасно, безопасно ↓ исключает иньекции 
        //$result = $conn->query($sql);
        $stmt = $conn->prepare("UPDATE users SET name = ?, age = ?, salary = ? WHERE id = $id");
        $stmt->bind_param("sii", $name, $age, $salary); // s - string, i - int, d - double
        $result = $stmt->execute();
        if($result){
            header("Location: show.php?id=" . $id);
            $_SESSION['success'] = "Пользователь обновлен";
            exit();
        }
    }
?>
