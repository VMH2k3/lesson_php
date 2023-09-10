    <?php 
    // thực hiện truy vấn ở trang localhost/phpmyadmin/


    //Tạo class
    class hinas {
    public    function sum($a,$b){
            $sum = $a+$b;
            echo 'Tổng của '.$a.' và '.$b.' là: '.$sum;
        }
        function show(){
            echo 'Đây là hàm show của class hinas';
        }
    }

$bien1 = new hinas; //khai báo biến 1 mang thuộc tính của class hinas
$bien1 ->show();
echo '<br>';
$bien1 ->sum(5,7);
    ?>