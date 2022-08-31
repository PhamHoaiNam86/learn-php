<?php
// b1: tính tổng số chẵn từ 1 đến n 
$sum = 0;
for($i = 0 ; $i <=20 ; $i++){
    if($i % 2 == 0){
        $sum = $sum + $i;
    }
}
echo "tổng là {$sum}";
echo "<br>";

// b2: tính tổng nghịch đảo các số chia hết cho 3 từ 3 đến n 
$t = 0;
for($i = 3; $i <= 20; $i++){
    if($i % 3 == 0){
        $t = $t + 1/$i;
    }
}
echo "tổng là {$t}";
echo "<br>";

// b3: tính tổng chuỗi
$tong = 0;
for($i = 1 ; $i <= 3 ; $i++){
    $tong = $tong + ($i/($i+1));
}
echo "tổng là {$tong}";
echo "<br>";
// b4: giải pt bậc 2
$a = 3;
$b = 7;
$c = 2;
$dem;
if($a != 0){
    $dem = $b*$b - (4*$a*$c);
    if($dem < 0){
        echo "phương trình vô nghiệm";
    }elseif($dem > 0){
        $x1=$x2=-($b/2*$a);
        echo "phương trình có nghiệm kép x1=x2= {$x1}";
    }
}else{
    echo "không phải là pt bậc 2";
}
?>