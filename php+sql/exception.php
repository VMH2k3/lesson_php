<?php
// try{

// }catch(){

// }
// => xử lí ngoại lệ khi chương trình gặp lỗi vẫn chạy bình thường.
$age=18;
try{
    //gõ code nghi vấn chứa lỗi
    echo 'Vũ Minh Hoàng đẹp trai vã ọ'.'<br>';
    // vmhdz(); //Error
    if($age<20){
//trường hợp muốn chủ động chỉ định đáp xuống catch của mình thì dùng :
        throw new Exception('Số tuổi phải lớn hơn 20');
    }
}catch(Error  $exception) //class Error class có sẵn trong php
{
    echo $exception ->getMessage().'<br>';
    echo 'Lỗi tại File : '.$exception ->getFile().'<br>';
    echo 'Lỗi tại Line : '.$exception ->getLine().'<br>';
}
catch(Exception  $exception) //class Exception class có sẵn trong php
{
    echo $exception ->getMessage().'<br>';
    echo 'Lỗi tại File : '.$exception ->getFile().'<br>';
    echo 'Lỗi tại Line : '.$exception ->getLine().'<br>'; //nó sẽ trả về dòng đặt Exception
}
echo '<br>';
echo 'Chương trình vẫn hoạt động bình thường';
?>