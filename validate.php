<!-- 
validate Client : Thẻ HTML , JS (bắt lỗi ngay lập tức không reload lại trang)
validate Server : PHP   ( bắt lỗi khi reload lại trang)


Bắt Lỗi
Họ tên bắt buộc , trên 5 kí tự
email bắt buộc và đúng kiểu email
 -->


<?php
//bắt lỗi với họ tên
    if(!empty($_POST)){
        $error = [];
        if(empty($_POST['fullname'])){
        $error['fullname']['required']='Bắt buộc phải nhập họ tên';
        }else{
            if(strlen($_POST['fullname'])<5){
                $error['fullname']['minlength']='Họ tên tối thiểu phải chứa 5 kí tự';
            }
        }
        //bắt lỗi với họ tên
        if(empty($_POST['email'])){
            $error['email']['required']='Bắt buộc phải nhập email';
        }else{
            if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                $error['email']['invalid']='Phải nhập đúng kiểu email';
            }
            
        }
        // if(empty($error)){
        //     echo 'Validate thành công !';
        // }else{
        //     echo 'Có lỗi xảy ra';
        // }
    }
?>


<form action="" method="post">
    <p><input type="text" name="fullname" placeholder="Họ Tên">
        <?php
        echo !empty($error['fullname']['required'])?'<p style="color:red">'. $error['fullname']['required'].'</p>':'';
        echo !empty($error['fullname']['minlength'])?'<p style="color:red">'. $error['fullname']['minlength'].'</p>':'';
    ?></p>
    <p><input type="text" name="email" placeholder="Email">
        <?php
        echo !empty($error['email']['required'])?'<p style="color:red">'. $error['email']['required'].'</p>':'';
        echo !empty($error['email']['invalid'])?'<p style="color:red">'. $error['email']['invalid'].'</p>':'';
    ?></p>
    <button type="submit">Gửi</button>
</form>