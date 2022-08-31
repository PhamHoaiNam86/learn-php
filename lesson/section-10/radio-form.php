<?php
if(isset($_POST['btn_reg'])){
    $show_gender = array(
        'male' => 'NAM',
        'famale' => 'NỮ'
    );
    echo "<pre>";
    print_r($_POST);
    
    if(empty($_POST['gender'])){
        echo "bạn chưa nhập giới tính";
    }else{
        $gender = $_POST['gender'];
        echo $show_gender[$gender];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dữ liệu form từ radio button</title>
</head>
<body>
    <form action="" method="POST">
        <input type="radio" name="gender" value="male" id="male" checked="checked">NAM
        <input type="radio" name="gender"  id="famale" value="famale">NỮ
        <input type="submit" name="btn_reg" value="register">
    </form>
</body>
</html>