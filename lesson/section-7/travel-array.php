<?php
// duyệt mảng 1 chiều
// $list_odd = array(1,3,5,7);

// $sum = 0;
// foreach($list_odd as $key => $value){
//     echo "{$key} => {$value}<br>";
//     $sum += $value;
// }
// echo "tổng là {$sum}";

// duyệt mảng đa chiều

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

foreach ($list_user as $item) {
    // echo "<pre>";
    // print_r($item);
    // echo "</pre>";
    echo $item['id']."<br>";
    echo $item['fullname']."<br>";
    echo $item['email']."<br>";

}
