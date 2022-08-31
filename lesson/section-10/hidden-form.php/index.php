<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
    }
}

// kiem tra submit form
if (isset($_POST['btn_login'])) { 
    $info = array(
        'username' => "pham hoai nam",
        'password' => "phamhoainambt86"
    );

    // hien thi du lieu username
    $error = array();
    if (empty($_POST['username'])) { // b1:kiem tra du lieu
        $error['username'] = "moi ban nhap ten dang nhap";
    } else {
        $username = $_POST['username']; // b2:gan du lieu
    }
    if (empty($_POST['password'])) {
        $error['password'] = "moi ban nhap mat khau";
    } else {
        $password = $_POST['password']; //b2
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    // echo "{$username} - {$password}";/

    // b1: kiem tra du lieu
    // b2: gan du lieu
    // b3: kiem tra login
    // b4: xu li login
    // ----chuyen huong file cart.php
    // ---- thong bao: loi dang nhap

    if(empty($error)){ // du lieu da dc nhap
        if(($username == $info['username']) && ($password == $info['password'])){
            $redirect_to = $_POST['redirect_to'];
            header("location:{$redirect_to}");
        }else{
            $error['login'] = "ten dang nhap hoac mat khau khong chinh xac";
        }
    }
    if(!empty($error)){
        show_array($error);
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRUYỀN DỮ LIỆU FORM BẰNG PHƯƠNG THỨC POST</title>
</head>

<body>
    <h1>Đăng Nhập</h1>
    <form action="" method="POST">
        NAME: <input type="text" name="username" id=""><br><br>
        PASSWORD: <input type="password" name="password" id=""><br><br>
        <input type="hidden" name="redirect_to" value="cart.php">
        <input type="submit" name="btn_login" value="login">
    </form>
</body>

</html>