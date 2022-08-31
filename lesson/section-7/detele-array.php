<?php
$user = array(
    'id' => 1,
    'fullname' => 'Phạm Hoài Nam',
    'email' => 'phamhoainambt86@gmail.com',
    'website' => 'unitop.vn'
);
// echo "<pre>";
// print_r($user);
// echo "</pre>";

unset($user);
echo "<pre>";
print_r($user);
echo "</pre>";


// unset($user['website']);
// echo "<pre>";
// print_r($user);
// echo "</pre>";

$list_user = array(
    1 => array(
        'id' => 1,
        'fullname' => 'Phạm Hoài Nam',
        'email' => 'phamhoainambt86@gmail.com'
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Phạm Thanh Hải',
        'email' => 'phamthanhhaibt86@gmail.com'
    )
);
echo "<pre>";
print_r($list_user);
echo "</pre>";

// xóa mảng da chiều
unset($list_user[2]);
echo "<pre>";
print_r($list_user);
echo "</pre>";
