<?php
$_vmhdz = 'Vũ Minh Hoàng đẹp trai';
$_toi = 'Tôi là: ';
/*echo $_toi;
echo $_vmhdz;
echo '<br>';*/
// comment một dòng

//var_dump($_vmhdz) ; debug ra kiểu dữ liệu và giá trị 

// $bienso_1 = 'anh vmh dz';
// $bienso_2 = ' anh vmh la so 1';
// $bientong = $bienso_1.$bienso_2; //phep noi hai chuoi voi nhau
// $bientong2 = $bienso_1.' va'.$bienso_2;
// echo $bientong;
// echo $bientong2;
//kết hợp html vào câu lệnh echo
// echo' <ul style="list-style: none;">
//  <li>'.$bienso_1.'</li>
//  <li>'.$bienso_2.'</li>
//  <li>'.$bientong.'</li>
//  <li>'.$bientong2.'</li></ul>';

define('vmh',20); //khai báo hằng số
const VMH_1 = 19+1;//khai báo hằng số nên viết Hoa

//  $bien_1= '8';
// echo is_string($bien_1); 
//kiểm tra kiểu : is_[kiểu dữ liệu cần kiểm tra](biến);
// $bien_2 = (int)$bien_1; //ép kiểu từ string sang int
// // var_dump($bien_2);
// $bien_3 = false;  
// $bien_4 = (string)$bien_3; //true -> string(1)"1"
// //false -> string(0)""
// var_dump($bien_4);

//khai báo kiểu số thực
// $bien=12.5;
// echo is_float($bien);

//kiểu dữ liệu mảng
 
// $bien = [1,2,3];
$bien = '1,2,3';
// $bien1 = (array)$bien;
// var_dump($bien1);
// echo is_array($bien1);

//kiểu dữ liệu null
// $bien = null;
// $bien = (int)$bien;
// var_dump($bien);

//toán tử và biểu thức
//toán tử % là lấy số dư
//toán tử .= nối hai sâu
// toán tử ** là toán tử luỹ thừa

// switch ($bien1){
//     case 1:break;
//     case 2:break;
//     case 3:break;

//     default:
//     break;    
    
// }

// die(Dừng chương trình);exit(); không thực hiện nhưng câu lệnh dưới chúng
  
echo "Hello guy";
//câu lệnh include và repquire
// include('đường dẫn đến file cần liên kết'); 
// include "index.php"; thêm file index vào nếu lỗi thì các câu lệnh dưới cẫn chạy
// require "index.php"; nếu lỗi thì các câu lệnh dưới sẽ dừng lại

?>