<?php
require_once "connect.php";
//truy vấn tất cả dữ liệu trong bảng
// $sql = "SELECT * FROM hocsinh";
// try {
//     $statement = $connect->prepare($sql);
//      $statement->execute();
//     //mảng data
//     $data = $statement->fetchAll(PDO::FETCH_ASSOC); //show theo key là đúng tên cột
//     // $data = $statement->fetchAll(PDO::FETCH_NUM); //show theo key là số  
//     // $data = $statement->fetchAll(PDO::FETCH_BOTH); //thử nhiều loại khác nhau
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";

// } catch (Exception $exp) {
//     echo $exp -> getMessage().'<br>';
//    echo $exp -> getFile().'<br>';
//    echo $exp -> getLine().'<br>';
// }


//Truy vấn một dòng dữ liệu
$sql = "SELECT * FROM hocsinh WHERE id= :id";
$id=3;
try {
    $statement = $connect->prepare($sql);
    $arr=['id'=>$id];
    $statement->execute($arr);
    //mảng data
    $data = $statement->fetch(PDO::FETCH_ASSOC); //show theo key là đúng tên cột
    // $data = $statement->fetchAll(PDO::FETCH_NUM); //show theo key là số  
    // $data = $statement->fetchAll(PDO::FETCH_BOTH); //thử nhiều loại khác nhau
    echo "<pre>";
    print_r($data);
    echo "</pre>";

} catch (Exception $exp) {
    echo $exp -> getMessage().'<br>';
   echo $exp -> getFile().'<br>';
   echo $exp -> getLine().'<br>';
}
?>