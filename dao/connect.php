<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'test';
    $conn = mysqli_connect($hostname, $username, $password, $database);
    if($conn->connect_error) die ($conn->connect_error);
?>