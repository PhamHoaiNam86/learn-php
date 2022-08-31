<?php
// phân trang
$total_rows = 10;
$num_per_page = 3;
$num_page = $total_rows / $num_per_page;
echo ceil($num_page);

// xuất mảng số nguyên chia hết cho 2 từ 1 mảng co trước
$list_integer = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

$list_even = array(); // tạo 1 mảng rổng 
if (!empty($list_integer) && is_array($list_integer)) { // kiểm tra xem mảng rổng hay không và xem có phải mảng hay không
    foreach ($list_integer as $item) { // duyệt pt mảng
        if ($item % 2 == 0) { // kiểm tra phần tử mảng có chia hết cho 2
            $list_even[] = $item; // đẩy pt mảng chia hết cho 2 vào mảng rổng
        }
    }
}

echo "<pre>";
print_r($list_even);

// hiển thị danh sách theo mục đa cấp
$list_post_cat = array( // tạo ra một mảng danh mục
    1 => array(
        'id' => 01,
        'cat_title' => 'giáo dục',
        'level' =>  0,       
    ),
    2 => array(
        'id' => 02,
        'cat_title' => 'khuyến học',
        'level' => 1,
    ),
    3 => array(
        'id' => 03,
        'cat_title' => 'du học',
        'level' => 1,
    ),
    4 => array(
        'id' => 04,
        'cat_title' => 'thể thao',
        'level' => 0,
    ),
    5 => array(
        'id' => 05,
        'cat_title' => 'châu âu',
        'level' => 1,
    ),
    6 => array(
        'id' => 06,
        'cat_title' => 'châu âu',
        'level' => 2,
    ),
    7 => array(
        'id' => 07,
        'cat_title' => 'châu á',
        'level' => 1,
    ),
    
);

echo "<pre>";
print_r($list_post_cat);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư viện hàm PHp</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>STT</td>
                <td>Tên</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if(!empty($list_post_cat)){
                $sum = 0;
                foreach($list_post_cat as $item){
                    $sum++;
                    ?>
                    <tr>
                        <td><?php echo $sum; ?></td>
                        <td><?php echo str_repeat('--',$item['level']).$item['cat_title'] ?></td>
                    </tr>
                 <?php
                }
            }
            ?>
        
        </tbody>
    </table>
</body>
</html>
