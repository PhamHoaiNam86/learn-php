<?php
// tạo mảng rổng
$error = array();
$error['username']="bạn cần nhập đúng tên đăng nhập";
echo "<pre>";
print_r($error);
echo "<pre>";

// tạo mảng có key mặc định
$list_odd = array(1, 3, 5);

// tạo mảng có key xác định
$user = array(
    'id' => 1,
    'fullname' => 'Phạm Hoài Nam',
    'email' => 'phamhoainambt86@gmail.com'
);

echo "<pre>";
print_r($user);
echo "<pre>";
?>