<?php
// echo 'Trang xử lí';
// $_SERVER biến siêu cục bộ(chứa các biến $_GET $_POST $_REQUEST)
//nếu tồn tại phương thức get or post thì thực hiện

if(!empty($_SERVER['REQUEST_METHOD']))
{
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
}

$result = move_uploaded_file($_FILES['hoang_upload']['tmp_name'],
'C:\xampp\htdocs\PHP\upload_file\uploads\ '.$_FILES['hoang_upload']['name']
);
var_dump($result);
?>