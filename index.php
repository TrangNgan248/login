<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập thành công</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['name'])) {
        echo 'Xin chao ' . $_SESSION["name"];
    } else if (isset($_COOKIE['name'])) {
        echo 'Xin chao ' . $_COOKIE["name"];
    } else {
        header("Location: login.php");
    }
    ?>

    <form action = "logout.php" method = "POST">
        <input type="submit" value="Log out">
    </form>
</body>

</html>