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
    <?php
    echo '<h3>Bạn đã đăng nhập thành công với: </h3>

    <h2>Username:'.$_SESSION['user'][0].'</h2>
    <h2>Password:'.$_SESSION['user'][1].' </h2>';
    ?>
</body>

</html>