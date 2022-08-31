<?php
// b1 : tạo mảng mảng lưu các số lẻ từ 1 đến 150
$list_odd = array(); // tạo ra mảng roonngr để lưu trữ
for ($i = 1; $i <= 150; $i++) {
    if ($i % 2 != 0) {
        $list_odd[] = $i;
    }
}
// echo "<pre>";
// print_r($list_odd);
// echo "</pre>";

// b2 :tạo mảng đa chiều quản lí các bài viết web tin tức
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
echo "<pre>";
print_r($list_item);
echo "</pre>";

// b3: tạo mảng đa chiều quản lí các sản phẩm trong web bán hàng
$list_post = array(
    1 => array(
        'shirtname' => 'áo thun form rộng',
        'price' => '86.000đ'
    ),
    2 => array(
        'shirtname' => 'áo chống nắng',
        'price' => '106.000đ'
    ),
    3 => array(
        'shirtname' => 'áo khóa bomber',
        'price' => '66.000đ'
    ),
    4 => array(
        'shirtname' => 'áo đá banh',
        'price' => '123.000đ'
    ),
);
echo "<pre>";
print_r($list_post);
echo "</pre>";


?>
 <!-- b4: hiển thị danh sách bài viết lên giao diện -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
  
 <h1>hiển thị danh sách bài viết lên giao diện</h1>
   <?php
   foreach($list_item as $item){
    ?>
    <ul>
        <li>
            <a href=""><?php echo $item['id'] ?></a>
        </li>
        <li>
            <a href=""><?php echo $item['header'] ?></a>
        </li>
        <li>
            <?php echo $item['body'] ?>
        </li>
    </ul>
    <?php } ?>


    <!-- b4: hiển thị danh sách sản phẩm lên giao diện  -->
    <h1>hiển thị danh sách sản phẩm lên giao diện</h1>
    <?php 
    foreach($list_post as $item){
    ?>
    <ul>
        <li>
            <a href=""><?php echo $item['shirtname'] ?></a>
        </li>
        <li>
            <a href=""><?php echo $item['price'] ?></a>
        </li>
    </ul>
    <?php } 
    ?>

 </body>
 </html>


