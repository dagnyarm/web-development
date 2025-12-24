<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(isset($_GET['success'])){
            echo '<p>$_GET[\'success\'] was received</p>';
        }
    }
    
?>

<a href="index.php?success=1">index</a>