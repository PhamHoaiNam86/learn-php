<?php
// danh sách số nguyên tố
$list_odd = array(2, 3, 5, 7);
// danh sách thành viên

$list_user = array(
    1 => array(
        'id' => 1,
        'fullname' => 'Phạm Hoài Nam',
        'email' => 'phamhoainambt86@gmail.com'
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Phạm Thanh Hải',
        'email' => 'phamthanhhaibt86@gmail.com'
    )
);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nhũng dữ liệu mảng vào html</title>
</head>

<body>
    <h1>Danh sách số nguyên tố</h1>
    <table>
        <thead>
            <tr>
                <td>stt</td>
                <td>số nguyên tố</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sum = 0;
            foreach($list_odd as $item){
                $sum++;
            ?>
            <tr>
                <td> <?php echo $sum ?> </td>
                <td> <?php echo $item ?> </td>
            </tr>
            <?php
            }
            ?>
        </tbody>

    </table>

    <h1>Danh sách thành viên</h1>
    <?php if(!empty($list_user)){ ?>
    <table>
        <thead>
            <tr>
                <td>stt</td>
                <td>id</td>
                <td>họ và tên</td>
                <td>email</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sum = 0;
            foreach($list_user as $user){
                $sum++;
            ?>
            <tr>
                <td> <?php echo $sum ?> </td>
                <td> <?php echo $user['id'] ?> </td>
                <td> <?php echo $user['fullname'] ?> </td>
                <td> <?php echo $user['email'] ?> </td>
            </tr>
            <?php
            }
            ?>
        </tbody>

    </table>
    <?php }else{
        
        ?>
        <p>không tồn tại dữ liệu</p>
        <?php
    
    } ?>
</body>

</html>