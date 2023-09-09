<?php 
session_start();
$_SESSION['user']= [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/avater.png" type="image/x-icon" />
    <title>Đăng nhập</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p><input type="text" name="user" id=""></p>
        <p><input type="password" name="pass" id=""></p>
        <p><input type="submit" name="dangnhap" value="Đăng nhập"></p>
    </form>

    <?php
    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
        //input
        $user=$_POST['user'];
        $pass=$_POST['pass'];

        //ví dụ đã nhập đúng
        $_SESSION['user'][0]=$user;
        $_SESSION['user'][1]=$pass;

        echo 'bạn đã đăng nhập thành công vào '.$_SESSION['user'][0].' với password :'.$_SESSION['user'][1];
        

    }



    ?>
</body>

</html>