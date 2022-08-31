<?php
// tính tổng các số chia heetd cho 3 (3 => $n)

function check_divide($k)
{
    if ($k % 3 == 0) {
        return true;
    } else {
        return false;
    }
}

function tlotal_divide($n)
{
    $sum = 0;
    for ($i = 3; $i <= $n; $i++) {
        if (check_divide($i)) {
            $sum += $i;
            echo "$i <br>";
        };
    }
    return $sum;
}

echo tlotal_divide(9)."<br>";

// hàm tính tổng các số nguyên tố từ 2 +> $n
function check_prime($k)
{
    if ($k < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($k); $i++) {
        if ($k % $i == 0) {
            return false;
        }
    }
    return true;
}

function tlotal_prime($n)
{
    $sum = 0;
    for ($i = 2; $i <= $n; $i++) {
        if (check_prime($i)) {
            $sum += $i;
            echo $i."<br>";
        }
    }return $sum;
    
}

echo tlotal_prime(9);
