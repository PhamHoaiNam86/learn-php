<?php
$user = array(
    'id' => 1,
    'fullname' => 'Phạm Hoài Nam',
    'email' => 'phamhoainambt86@gmail.com'
);

echo $user['fullname'];
echo "<br>";

$list_odd = array(1, 3, 5);
echo $list_odd[1];
echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    họ và tên là : <strong><?php echo $user['fullname']; ?></strong>
</body>

</html>