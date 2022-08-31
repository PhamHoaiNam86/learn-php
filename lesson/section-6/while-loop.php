<?php
// tính  tổng các số chẵn từ 0 đến 10

$sum = 0;
$i = 0;
while($i<=10){
    $sum += $i;
    $i= $i + 2;
}
echo $sum;
?>