<html>

<head>
    <title>Login Page</title>
</head>

<body>
    <h3>Login</h3>
    <?php
    session_start();
    if(isset($_SESSION['name']) || isset($_COOKIE['name'])){
        header("Location: index.php");
    }
    ?>
    <?php
    if(isset($_REQUEST['m'])){
        echo'Sai ten dang nhap hoac mat khau';
    }
    ?>
    <div id = "formlogin">
    <form action="login_validation.php" method="POST">
        <label>Enter Username</label><br>
        <input type="text" name="username" placeholder="username" required><br>
        <label>Enter Password</label><br>
        <input type="password" name="pw" placeholder="password" required><br>
        Ghi nhớ đăng nhập: <input type = "checkbox" name = "remember"><br>
        <input type="Submit" value="Login">
    </form>
    </div>
</body>

</html>