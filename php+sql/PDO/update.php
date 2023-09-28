<?php
require_once "connect.php";
$sql = "UPDATE hocsinh SET fullname=:fullname, age=:age, address = :address WHERE id=:id";
//data cần update
$fullname = "Vũ Mạnh Cường";
$age = 48;
$address = "Tiền Phong Vĩnh Bảo Hải Phòng";
$id = 4;

try {
    $statement = $connect ->prepare($sql);
    // $statement->bindParam(':fullname',$fullname);
    // $statement->bindParam(':age',$age);
    // $statement->bindParam(':address',$address);
    // $statement->bindParam(':id',$id);
    $data = [
        'fullname'=>$fullname,
        'age'=>$age,
        'address'=>$address,
        'id'=>$id
    ];
            $updateStatus = $statement->execute($data);
            if($updateStatus){
                echo '<div style="padding: 20px; background-color: aquamarine; color: brown;text-align: center;">Bạn đã update thông tin thành công'.'</div>';
            }
} catch (Exception $exp) {
    echo $exp -> getMessage().'<br>';
    echo $exp -> getFile().'<br>';
    echo $exp -> getLine().'<br>';
}

?>