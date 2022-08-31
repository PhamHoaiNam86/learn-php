<?php
// hàm có 1 tham số
// function check_even($n){
//     if($n % 2 == 0){
//         echo "{$n} là số chẵn";
//     }
// }
// check_even(8);
# hàm có 2 tham số
function sum($a, $b)
{
    $t = $a + $b; // xử lí code
    echo $t; // giá trị trả về
}

// hàm có tham số tùy biến
function show_array($data){
    if(is_array($data)){
        echo "<pre>";
    print_r($data);
    echo "</pre>";
    }
}
// function sum_multi_number()
// {
//     // echo func_num_args();
//     $list_arg = func_get_args();
//     $sum = 0;
//     foreach($list_arg as $value){
//         $sum += $value;
//     }
//     show_array($list_arg);
//     echo $sum;
// }
// sum_multi_number(2, 5 , 6, 8);

function sum_multi_number($list_number = array()){
    if(is_array($list_number)){
        $sum = 0;
        foreach($list_number as $value){
            $sum += $value;
        }
        echo $sum;
    }
}
$list_number = array(2,4,6);
sum_multi_number($list_number);


