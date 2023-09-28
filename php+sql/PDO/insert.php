<?php

require_once('connect.php');//nhúng file connect để những câu lệnh trong file được thực hiện trong database
$sql ="INSERT INTO hocsinh(fullname, age, address) VALUES(:fullname,:age,:address)" ; 
//gán biến sql là đường dẫn đến bảng cần insert
try {
    $statement = $connect -> prepare($sql); //thực hiện gắn hàm trong class PDO có chức năng insert

    //Cách 1
// $fullname = "Vũ Minh Hoàng";
// $age = 20;
// $address = "Tiền Phong-Vĩnh Bảo-Hải Phòng";
// $statement -> bindParam(':fullname',$fullname); //thực hiện chức năng insert dữ liệu
// $statement -> bindParam(':age',$age);
// $statement -> bindParam(':address',$address);

    //Cách 2
$fullname = "Vũ Mạnh Cường";
$age = 48;
$address = "Tiền Phong-Vĩnh Bảo-Hải Phòng";
$data = [
    'fullname' => $fullname,
    'age' => $age,
    'address' => $address
];
$insertStatus = $statement -> execute($data);
var_dump($insertStatus);
} catch (Exception $exp) {
   echo $exp -> getMessage().'<br>';
   echo $exp -> getFile().'<br>';
   echo $exp -> getLine().'<br>';
}

//mỗi lần chạy trang là một lần insert


?>