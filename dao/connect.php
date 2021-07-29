<?php
    $hostname = 'localhost';
    $un = 'root';
    $pass = '';
    $database = 'test';
    echo'123';
    $conn = mysqli_connect($hostname, $un, $pass, $database);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>