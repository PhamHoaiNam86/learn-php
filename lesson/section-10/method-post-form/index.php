<?php
function show_data($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
// show_data($_SERVER);
// kiem tra submit form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "{$username} - {$password}";
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
        <input type="submit" name="btn_login" value="Login">
    </form>
</body>

</html>