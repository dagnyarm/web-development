<?php
    $url = $_SERVER['REQUEST_URI'];
    $url = parse_url($url, PHP_URL_PATH); 
    if(!str_contains($url, 'view')){
        $url = '/view1';
    }

    $layout = file_get_contents('layout.php');
    $content = file_get_contents('view' . $url . '.php');
    $layout = str_replace('{{ content }}', $content, $layout);
    echo $layout;
?>


