<form action="" method="post">
    <div> <input required type="text" name="fullname" placeholder="Họ Tên"></div>
    <div><input required type="email" name="email" placeholder="Email"></div>
    <button type="submit">Gửi</button>
</form>
<?php
//phương thức post trong php
//gửi dữ liệu qua các form trong html và các giá trị được định nghĩa trong các input
//gồm(textbox, radio, checkbox, password, textarea, hidden) và được nhận dạng thông qua
//tên(name) của các input đó.
//các dữ liệu được nhận qua phương thức post đó đều được lưu trong biến cục bố $_POST
//được lưu dưới dạng mảng

echo '<pre>';
print_r($_POST);
echo '</pre>'.'<br>';

echo 'Tên của tôi là : '.$_POST['fullname'];


?>