<?php
if(isset($_POST['username']) && isset($_POST['pw'])){
    $username = $_POST['username'];
    $password = $_POST['pw'];
    $cb = isset($_POST['remember'])?1:0;
    require_once "../dao/connect.php";
    $query = "SELECT * FROM login WHERE username = '$username' AND password = '$pw' ";
    $result = $conn->query($query);
    $row = $result -> fetch_array(MYSQLI_NUM);
    if($row){
        if($cb){
            setcookie('name', $row[0], time()+60*60*24*7);
            setcookie('username', $row[1], time()+60*60*24*7);
            setcookie('password', $row[2], time()+60*60*24*7);
        }
        session_start();
        $_SESSION['name'] = $row[0];
        header("Location: .../index.php");
    } 
    else{
        header("Location: ../login.php?m=error");
    }
}
    
?>