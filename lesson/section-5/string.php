<?php
$str_1 = "xin chào ";
$str_2 = "Nam Hải";
echo "str_1 = {$str_1}";
echo "<br>";
echo "str_2 = {$str_2}";

echo "<br>-------------<br>";

$str_1 .= $str_2; //  $str1 = $str1.$str2
echo $str_1;
?>