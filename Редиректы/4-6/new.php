<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        echo 'post';
        require "connect.php";
        $name = $_POST['name'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];

        //$sql = "INSERT INTO users (name, age, salary) VALUES ('$name', '$age', '$salary')"; не безопасно, безопасно ↓ исключает иньекции 
        //$result = $conn->query($sql);
        $stmt = $conn->prepare("INSERT INTO users (name, age, salary) VALUES (?, ?, ?)");
        $stmt->bind_param("sii", $name, $age, $salary); // s - string, i - int, d - double
        $result = $stmt->execute();
        if($result){
            $_SESSION['name'] = $name;
            $_SESSION['age'] = $age;
            $_SESSION['salary'] = $salary;
            header("Location: new.php");
            $_SESSION['success'] = "Пользователь добавлен: $name, $age, $salary";
            exit();
        }
    }
?>

<form action="new.php" method="POST">
    <h3>Добавить пользователя</h3>
    <h4 style="color: red; margin: 0px"><?php if(isset($_SESSION['add_error'])){echo htmlspecialchars($_SESSION['add_error']);}else{echo '';} ?></h4>
    <input type="text" name="name" placeholder="Имя" value="<?php if(isset($_SESSION['name'])){echo htmlspecialchars($_SESSION['name']);}else{echo '';} ?>">
    <input type="number" name="age" placeholder="Возраст" value="<?php if(isset($_SESSION['age'])){echo htmlspecialchars($_SESSION['age']);}else{echo '';} ?>">
    <input type="number" name="salary" placeholder="Зарплата" value="<?php if(isset($_SESSION['salary'])){echo htmlspecialchars($_SESSION['salary']);}else{echo '';} ?>">
    <input type="submit" id="submit">
</form>

<h2><?php if(isset($_SESSION['success'])){echo htmlspecialchars($_SESSION['success']);}?></h2>
<a href="index.php">Вернуться</a>