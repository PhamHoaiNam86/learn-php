<?php
// b1: kiểm tra số nguyên chẵn
// function check_even($n){
//     if($n > 0 && $n % 2 == 0){
//         echo "{$n} là số chẵn";
//     }else{
//         echo "{$n} là số lẻ";
//     }
// }
// check_even(11);
// function check_even($n)
// {
//     if ($n > 0 && $n % 2 == 0) {
//         return true;
//     } else {
//         return false;
//     }
// }
// if (check_even(8) == true) {
//     echo " đây là số chẵn";
// } else {
//     echo " đây là số lẻ";
// }

// b2: tính tổng số nguyên tố từ 2 đến n

// kiểm tra số nguyên tô
// function check_prime($n)
// {
//     if ($n < 2) {
//         return false;
//     }
//     for ($i = 2; $i <= sqrt($n); $i++) {
//         if ($n % $i == 0) {
//             return false;
//         }
//     }
//     return true;
// }
// tính tổng số nguyên tố từ 2 đến n
// function total_prime($n)
// {
//     $sum = 0;
//     for ($i = 2; $i <= $n; $i++) {
//         if (check_prime($i)) {
//             $sum += $i;
//             echo "$i <br>";
//         }
//     }return $sum;
// }
// echo total_prime(5);


// b3: hàm lấy thông tin chi tiết một 
//bài viết theo id trong mảng bài viết

$list_item = array(
    1 => array(
    'id' => 01,
    'header' => 'Lewandowski lập cú đúp, Barcelona thắng đậm Sociedad',
    'body' => 'Cú đúp của Lewandowski đã giúp Barcelona thắng đậm Sociedad 4-1 tại Anoeta, qua đó giành chiến thắng đầu tiên ở La Liga năm nay',
),
    2 => array(
        'id' => 02,
        'header' => 'Man City vất vả kiếm một điểm trên sân Newcastle',
        'body' => 'Man City mở tỉ số trận đấu trên sân Newcastle, nhưng sau đó lại để đội chủ nhà ghi ba bàn. Dẫu vậy đội đương kim vô địch Premier League vẫn ra về với một điểm nhờ kết quả hòa 3-3.',

    ),
    3 => array(
        'id' => 03,
        'header' => 'Chelsea nhận ba bàn thua, một thẻ đỏ trên sân Leeds',
        'body' => 'Chelsea gây thất vọng mạnh khi để thua 0-3 trên sân Leeds ở vòng ba Premier League. Đoàn quân của HLV Tuchel kết thúc trận đấu với chỉ 10 người.'
    )
);

function get_post($id){
    global $list_item;
    if(array_key_exists($id, $list_item)){
        return $list_item[$id];
    }return false;
}

$item = get_post(2);
echo "<pre>";
print_r($item);
echo "</pre>";