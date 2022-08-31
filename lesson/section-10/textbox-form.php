<?php
// b1: kiem tra submit form
// b2: laay du lieu

if(isset($_POST['btn_login'])){
    // hien thi du lieu username
    if(empty($_POST['username'])){
        echo "moi ban nhap ten dang nhap";
    }else{
        $username = $_POST['username'];
        
    }
    if(empty($_POST['password'])){
        echo "moi ban nhap ten dang nhap";
    }else{
        $password = $_POST['password'];
        
    }
}
echo "{$username} - {$password}";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lấy dữ liệu từ textbox</title>
</head>
<body>
<h1>Đăng Nhập</h1>
    <form action="" method="POST">
        NAME: <input type="text" name="username" id=""><br><br>
        PASSWORD: <input type="password" name="password" id=""><br><br>
        <input type="submit" name="btn_login" value="login">
    </form>
</body>
</html>