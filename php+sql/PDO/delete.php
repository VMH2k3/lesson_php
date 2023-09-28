<?php
require_once "connect.php";
$sql ="DELETE FROM hocsinh WHERE id = :id";
$id = 5;
try {
   $statement = $connect->prepare($sql);
   //cách 1
//    $statement->bindParam(':id',$id);
   //cách 2
   $data = [
    'id'=>$id
   ];
   $deleteStatus = $statement->execute($data);
   if($deleteStatus){
    echo '<div style="padding: 20px; background-color: red; color: black;text-align: center;">Bạn đã xoá học sinh số '.$id.' thành công!'.'</div>';
}
} catch (Exception $exp) {
    echo $exp -> getMessage().'<br>';
    echo $exp -> getFile().'<br>';
    echo $exp -> getLine().'<br>';
}
?>