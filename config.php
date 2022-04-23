<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'thesis';

    $conn = new mysqli($host, $user, $pass, $db);

    $_CONFIG['web_title'] = 'CAR RENTAL ';

    include('functions.php');
?>