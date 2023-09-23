<?php 
// try {
//     //code...
// $_HOST = '127.0.0.1';
// $_DB = 'webcompany';
// $_USER = 'root';
// $_PASS = 'mysql'; hoặc '' nếu dùng xxamp
// $option = [
//     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //set utf8
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //tạo thông báo ra ngoại lệ khi gặp lỗi
// ];
// $con=new PDO('mysql:dbname='.$_DB.';host='.$_HOST,$_USER,$_PASS, $option);

// } catch (Exception $e) {
//   $err = $e->getMessage();
//   die();
// }

// Thông tin kết nối
const _HOST = 'localhost';
const _DB = 'hinas_database';
const _USER = 'root';
const _PASS = '';

    try {
        if(class_exists('PDO')){
            $dsn='mysql:dbname='._DB.';host='._HOST;
            $option = [
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //set utf8
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //tạo thông báo ra ngoại lệ khi gặp lỗi
                ];
            $connect = new PDO($dsn, _USER, _PASS,$option); //PDO là một class gồm nhiều hàm khác nhau
            // if($connect){echo 'Kết nối thành công!';}
        }
    } catch (Exception $exc) {
        echo $exc ->getMessage().'<br>';
        die();
    }



?>