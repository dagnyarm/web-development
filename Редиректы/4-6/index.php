<?php
    session_start();
    require "connect.php";

    unset($_SESSION['success']);

    //1

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    $users = [];
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $users[] = $row;
        }
    }

    echo "<table border=1 style=\"border-collapse: collapse;width: 30%;\">";
    echo '<tr><td>#</td><td>name</td><td>age</td><td>salary</td></tr>';
    foreach($users as $user){
        echo '<tr>';
        foreach($user as $info){
            echo "<td>$info</td>";
        }
        echo '</tr>';
    }
    echo '</table>';

    //2

    

?>
<?php foreach($users as $user):?>
    <a href="show.php?id=<?php echo htmlspecialchars($user['id'])?>"><?php echo htmlspecialchars($user['name'])?></a>
<?php endforeach?>
<a href="new.php">Добавить пользователя</a>