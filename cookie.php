<?php 
//COOKIE là gì
//- là chuỗi những thông tin lưu ở trình duyệt của người dùng để theo dõi, lưu lại 
//lịch sử người dùng, tăng trải nghiệm của người dùng


// Một số chức năng của Cookie
//Ghi nhớ đăng nhập
//Lịch sử tìm kiếm sản phẩm trên website
//Lịch sử sản phẩm đã xem
//Gợi ý sản phẩm, dịch vụ (Dựa theo thói quen tìm kiếm, xem sản phẩm ...)

 //Thiết lập Cookie trên PHP

// setcookie($name,$value,$expire=0,$path="",$domain="",$security=false,$httponly=false);
// $expire là thời gian tồn tại của cookie (tính theo timestamp);
// $path là đường dẫn cookie hoạt động
// $domain là tên miền hoạt động
// $security hoạt động khi có HTTPS
// $httponly chỉ cho phép gửi cookie qua HTTP (Hạn chế đánh cắp Cookie)

 setcookie('user','hoang',time()+86400,'/',false,true); //hết hạn sau 1 ngày
//  khi mình set  $path = '/ ' thì tất cả các project trong localhost đều dùng cookie này được
//còn khi muốn  set riêng cho prj khác nhau thì mình sửa địa chỉ của miền prj đó
//Biến $_COOKIE là biến siêu toàn cục là một mảng chứa các Cookie

// echo $_COOKIE['user'];

//DELETE COOKIE  
setcookie('user','hoang',time()-60,'/',false,true);

?>