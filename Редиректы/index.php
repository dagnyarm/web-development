<?php
    //2
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(isset($_GET['success'])){
            echo "<p>" . $_GET['success'] . "</p>";
        }
        
    }

?>


<a href="action.php?success=0">action</a>

<form action="page.php" method="GET">
    <input type="number" name="num" placeholder="Number">
    <input type="submit">
</form>