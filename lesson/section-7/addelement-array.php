<?php
// thêm vào mảng có key xác định
$user = array(
    'id' => 1,
    'fullname' => 'Phạm Hoài Nam',
    'email' => 'phamhoainambt86@gmail.com'
);
echo "<pre>";
print_r($user);
echo "<pre>";
$user['phone'] = '0379866521';
echo "<pre>";
print_r($user);
echo "<pre>";

// thêm vào mảng có key mặc định
$list_odd = array(1, 3, 5);
echo "<pre>";
print_r($list_odd);
echo "<pre>";
$list_odd[] = 7;
echo "<pre>";
print_r($list_odd);
echo "<pre>";
?>