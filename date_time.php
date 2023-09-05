<?php
date_default_timezone_set('Asia/Ho_Chi_Minh'); //set khu vực đang xét thời gian
echo date('Y/m/d H:i:s').'<br>'; // hàm xuất ra thời gian hiện tại 
//note viết hoa H thì là đồng hồ 24h còn viết thường thì sẽ là đồng hồ 12h
echo date_default_timezone_get().'<br>'; // xuất ra khu vực đang xét time

echo 'Timestamp thời điểm hiện tại : '.time().'<br>'; //số giây tính từ 1/1/1970

echo strtotime('now').'<br>';
//hàm chuyển đọc chuỗi và tính timestamp tại thời điểm đọc được trong chuỗi
echo 'Timestamp của next Monday: '.strtotime('next Monday ').'<br>';
echo 'Timestamp của 30 June 2003: '.strtotime('30 June 2003').'<br>';

?>