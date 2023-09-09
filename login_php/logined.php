<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logined</title>
</head>

<body>
    <h3>Bạn đã đăng nhập thành công với: </h3>
    <br>
    <h2>Username: <?php $_SESSION['user']?></h2>
    <h2>Password: <?php $_SESSION['pass']?></h2>
</body>

</html>