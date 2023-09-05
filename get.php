<?php
//phương thức get sẽ lấy dữ liệu trên đường dẫn URL
//ví dụ URL : hoang/sethanhcong/coganglen?id=24
//phương thức get sẽ lấy dữ liệu id=24 và lưu vào trong biến $_GET
echo '<pre>';
print_r($_GET['id']);
echo '</pre>'
?>