<?php
if(isset($_POST['pay'])){
    if(empty($_POST['pay'])){
        echo "bạn cần chọn giá trị";
    }else{
        $pay = $_POST['pay'];
        echo $pay;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy dữ liệu từ select box</title>
</head>

<body>
    <h1>Đặt Hàng</h1>
    <form action="" method="POST">
        <select name="pay" id="">
            <option value="">--chọn--</option>
            <option value="cod">thanh toán tại nhà</option>
            <option value="banking">thanh toán thẻ tín dụng</option>
        </select>
        <input type="submit" value="btn_order" name="đặt hàng">
    </form>
</body>

</html>