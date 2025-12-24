<?php
    //1
    $url = 'https://api.api/?time=';
    $res = file_get_contents($url);
    $data = json_decode($res);
    echo $data->result;
    echo "<br>";
    //2
    $date = date('Y-m-d');
    $url = "https://api.api/?date=$date";
    $res = file_get_contents($url);
    $data = json_decode($res);
    echo $data->result;
    echo "<br>";
    //3
    $url = "https://api.api/?current_holidays=$date";
    $res = file_get_contents($url);
    $data = json_decode($res);
    echo $data->result;
    echo "<br>";
    //4
    $date2 = $date;
    $date1 = '2024-02-01';
    $url = "https://api.api/?date1=$date1&&date2=$date2";
    $res = file_get_contents($url);
    $data = json_decode($res);
    echo $data->result;
    echo "<br>";
    //6
    
?>

