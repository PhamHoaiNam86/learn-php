<?php
function show_data($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
if (isset($_GET['btn_search'])) {
    show_data($_GET);
    $q = $_GET['q'];
    echo $q;
}

// get dữ liệu từ url
$mod = $_GET['mod'];
$act = $_GET['act'];
$id = $_GET['id'];
echo "{$mod} - {$act} - {$id }";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRUYỀN DỮ LIỆU FORM BẰNG PHƯƠNG THỨC GET</title>
</head>

<body>
    <h1>Đăng Nhập</h1>
    <a href="?mod=product&act=detail&id=1268">sản phẩm</a>
    <form action="" method="GET">
        TÌM KIẾM: <input type="text" name="q" id="">
        <input type="submit" name="btn_search" value="Search">
    </form>
</body>

</html>