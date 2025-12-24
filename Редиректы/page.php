<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if (empty($_GET['num'])) {
            $num = 1;
        } else {
            $num = $_GET['num'];
        }
        
        echo '<p>' . $num . '</p>';
    }
    
?>

<a href="index.php">index</a>