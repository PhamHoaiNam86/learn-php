<?php
$a = 10;
$b = 5;
function sum(){
    global $a , $b; // global lấy giá trị $a , $b
    return $a + $b;
}
echo sum();
?>