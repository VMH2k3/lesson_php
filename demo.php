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
// $bien = '1,2,3';
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
//câu lệnh include và repquire
// include('đường dẫn đến file cần liên kết'); 
// include "index.php"; thêm file index vào nếu lỗi thì các câu lệnh dưới cẫn chạy
// require "index.php"; nếu lỗi thì các câu lệnh dưới sẽ dừng lại



//XỬ LÍ CHUỖIIIIIII 


// //gán chuỗi cho hằng
// define('_AGENCY','VŨ Minh Hoãng');
// echo "Hello mình là \"Hoàng\""

//hàm lặp chuỗi n lần
// echo str_repeat('Hoàng FA !  ',4);

//hàm tìm chuỗi và thay thế chuỗi
// echo str_replace('-','<3','Hoàng đẹp trai vã ọ -');
 
//hàm mã hoá MD5 chuỗi $str(32 kí tự)
// echo md5('123456');

//hàm mã hoá sha1 chuỗi $str(40 kí tự)
// echo sha1('123456');

//hàm cắt chuỗi thành chuỗi con
// $bien = "Hoàng vô cùng đẹp trai!";
// $biencon = substr($bien, 0, 6);
// echo $biencon;

//hàm tìm và cắt từ kí tự tìm được từ trong hàm cho đến hết
// $bien = "Hoàng vô cùng đẹp trai!";
// $bien_moi = strstr($bien, 'Hoàng');
// echo $bien_moi;

//hàm tìm vị trị của substr nằm trong str đưa ra vị trí nếu có ngược lại đưa ra false
// $bien = "Hoàng vô cùng đẹp trai!";
// echo strpos($bien, 'vô cùng');

//hàm cắt bỏ substr cũ trong str thay bằng substr mới (gần giống replace nhưng là chuỗi con)
// $bien = "Hoàng vô cùng đẹp trai!";
// echo substr_replace($bien, 'vã ọ',7,9);
// chú ý cú pháp ($str, chuỗi thay thế, vị trí bắt đầu thay thế, độ dài chuỗi bị thay thế);

//hàm chuyển tất cả các kí tự sang chữ thường
//(KHÔNG ÁP DỤNG CHO CHỮ CÓ DẤU);
// $bien ='HOANG DEP TRAI VA O !' ;
// echo strtolower($bien);

//hàm chuyển các kí tự trong chuỗi sang chữ hoa
//(KHÔNG ÁP DỤNG CHO CHỮ CÓ DẤU);
// $bien = 'hoang dep trai va o!';
// echo strtoupper($bien);

//hàm chuyển chữ cái đầu của chuỗi sang chữ hoa
// $bien = 'hoang dep trai';
// echo ucfirst($bien).'<br>';

// //hàm chuyển chữ cái đầu của chuỗi sang chữ thường
// $bien = 'Hoang dep trai';
// echo lcfirst($bien);

//chuyển chữ cái đầu tiên của tất cả các từ trong chuỗi sang chữ hoa
// $bien = 'hoang dep trai va o!';
// echo ucwords($bien);

//hàm xoá tất cả kí tự x ở đầu và cuối
//cú pháp : trim($str,kí tự cần xoá);
//nếu để trông kí tự x thì hàm tự hiểu là khoảng trắng;
// $bien = 'iiiiiihoang dep trai iiii';
// echo trim($bien,'i');


//hàm json_encode và json_decode
//hàm chuyển chuỗi  array or object to Json
// $arr=[1,2,3,4,5];
// $json_encode = json_encode($arr);
// echo $json_encode.'<br>';

// //hàm chuyển json về arr or object

// $json_decode=json_decode($json_encode,true); 
// print_r($json_decode); //in mảng thì dùng print


//viết chương trình lấy 5 kí tự cuối của chuỗi

// $bien = 'Hoang dep trai va o';
// $substr = substr($bien,-5); // cut từ cuối lên
// echo $substr;

//đối với trường hợp tiếng việt 
// $bien = 'Hoàng đẹp trai vã ọ';
// $substr = mb_substr($bien, -5, null,'UTF-8');
// echo $substr;

//hàm tính độ dài chuỗi
// $bien='Hoàng đẹp trai vã ọ';
// echo mb_strlen($bien,'UTF-8'); //hàm dùng để đếm kí tự tiếng Việt

// //HÀM TRONG PHP

// function ten_ham(){
//     //nội dung
// }

//đệ quy

//hàm isset và hàm empty

//hàm isset  kiểm tra biến có tồn tại hay không
//ko kiểm tra được dữ liệu của biến và trường hợp biến = null

// $bien = true;
// if(isset($bien)){
//     echo $bien ;
// }


//hàm empty kiểm tra xem biến có tồn tại hay không
//chỉ trả về kiểu dữ liệu boolean 



//MẢNG TRONG PHP
$arr = array('HTML','JS','PHP');

//in mảng ra màn hình
// echo '<pre>';
// print_r($arr);
// echo '</pre>';

$arr2 = array('key1'=>'HTML','key2'=>'JS','key3'=>'PHP');

//in mảng ra màn hình
// echo '<pre>';
// print_r($arr2);
// echo '</pre>';

//thêm phần tử vào mảng
$arr2['key4']='reactjs';
$arr2[]='Nodejs'; // do key đang đặt tự do nên khi mình để trống nó sẽ đánh tuần tự từ 0;
array_push($arr2,'tôi sẽ','thành công'); //thêm vào mảng 2 phần tử 
// echo '<pre>';
// print_r($arr2);
// echo '</pre>';

//Đọc mảng

// if(!empty($arr2)){
//     foreach($arr2 as $key => $value)
//     {
//         echo $key.'  '.$value.'<br>';
//     }
    
// }


//HÀM LIÊN QUAN ĐẾN MẢNG

// $arr3 = array_values($arr2) ;//đưa mảng về mảng tuần tự
// $arr4 = array_keys($arr2);//trả về một mảng có giá trị là các key của mảng $arr2
// $bien = array_pop($arr2); // trả về phần tử cuối cùng của mảng
//is_array() kiểm tra xem biến có phải kiểu array hay không

// array_push($arr,'Tôi sẽ thành công !') thêm phần tử vào trong mảng
// array_shift($arr) hàm xoá phần tử đầu tiên của mảng và trả về phần tử đã xoá
// array_unshift($arr,'Tôi sẽ thành công !') thêm phần tử vào đầu mảng và trả về số lượng phần tử của mảng
// in_array($value,$arr) hàm kiểm tra xem $value có nằm trong mảng không ?

// HÀM SORT()
// sắp xấp các phần tử trong mảng theo thứ tự tăng dần giá trị 
// Nếu sắp xếp thành cong thì trả về TRUE ngược lại thì trả về FALSE
// $arr3 = array(5,6,7,3);
// echo sort($arr3).


// //hàm array_reverse()
// $arr3 = array(5,6,7,3);
// $arr4 = array_reverse($arr3);
// hàm trả về một mảng đảo ngược thứ tự các phần tử của mảng ban đầu

// // hàm array_merge()
// $arr3 = array(1,2,3);
// $arr4 = array(4,5,6);
// $arr5 = array_merge($arr3,$arr4);
// print_r($arr5); gộp 2 hay nhiều mảng và trả về mảng tổng 

// // hàm array_search()
// $arr = array('Hoàng','Sẽ','Thành','Công');
// echo array_search('Hoàng',$arr);
// hàm trả về vị trí của phần tử có value = 'Hoàng'

// // phàm array_slice($arr,$begin,$length)
// $arr = array(1,2,3,4,5);
// $arr1 = array_slice($arr,0,2);
// print_r($arr1);
// hàm trả về một mảng lấy $length phần tử của mảng kể từ phần tử $begin

//hàm array_unique()
//hàm loại bỏ những phần tử trùng lặp trong mảng và trả về mảng sau khi xoá

// hàm array_key_exists() kiểm tra xem key có tồn tại trong mảng hay không


//KIỂU DỮ LIỆU NUMBER
// làm tròn số round()
// làm tròn xuống floor()
// làm tròn lên ceil()
// lấy ngẫu nhiên rand()





?>