<?php 
//Session là phiên làm việc của người dùng
//Session trong PHP được lưu trên Server (Trong thư mục tạm được thiết lập trong file php.ini)
//Khi trình duyệt đóng ==>   session sẽ bị huỷ

//có thể hiểu cơ chế như sau : Sau khi client đăng nhập vào thì bên server sẽ gửi cookie về bên client
//sau đó cứ mỗi lần client nhập cookie đó thì server sẽ trả về phiên làm việc cho bên client

session_start();

//khởi tạo session 
$_SESSION['username'] = 'Vuminhhoang';
$_SESSION['admin']='VMH';
echo '<pre>';
print_r($_SESSION['username']);
echo '</pre>';


//để xoá một session :
unset($_SESSION['admin']);
//để xoá toàn bộ session:
session_destroy();


?>