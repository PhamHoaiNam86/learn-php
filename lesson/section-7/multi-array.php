<?php
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
// echo "<pre>";
// print_r($list_user);
// echo "</pre>";

$list_user[3] = array(
    'id' => 3,
    'fullname' => 'Trần Thị Hà',
    'email' => 'tranthihafbt86@gmail.com'
);
// echo "<pre>";
// print_r($list_user);
// echo "</pre>";

// $list_user[3]['phone']='0976985477';
// echo "<pre>";
// print_r($list_user);
// echo "</pre>";

$info =$list_user[3];
echo "<pre>";
print_r($info);
echo "</pre>";

echo $list_user[3]['id'];





