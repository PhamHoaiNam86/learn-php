<?php
// hàm trả giá trị trong nội bộ hàm
function show_array($data){
    if(is_array($data)){
        echo "<pre>";
    print_r($data);
    echo "</pre>";
    }
}
// function sum($a, $b){
//     $t = $a + $b; // xử lí code
//     echo $t; // giá trị trả về
// }
function sum($a, $b){
    $t = $a + $b; // xử lí code
    return $t; // giá trị trả về
}

$t = sum(2,6);
echo $t;
?>