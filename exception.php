<?php
// try{

// }catch(){

// }
// => xử lí ngoại lệ khi chương trình gặp lỗi vẫn chạy bình thường.

try{
    //gõ code nghi vấn chứa lỗi
    echo 'Vũ Minh Hoàng đẹp trai vã ọ'.'<br>';
    vmhdz(); //Error
}catch(Error  $exception) //class Error class có sẵn trong php
{
    echo $exception ->getMessage().'<br>';
    echo 'Lỗi tại File : '.$exception ->getFile().'<br>';
    echo 'Lỗi tại Line : '.$exception ->getLine().'<br>';
}
echo '<br>';
echo 'Chương trình vẫn hoạt động bình thường';
?>