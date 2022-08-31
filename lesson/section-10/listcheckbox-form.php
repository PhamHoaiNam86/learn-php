<?php
if(isset($_POST['btn_add'])){
    // print_r($_POST);
    // cach 1
    if(!empty($_POST['cat'])){
        foreach($_POST['cat'] as $item){
            echo $item."<br>";
        }
    }
    // cach 2
    $list_cat = implode("," ,$_POST['cat'] );
    echo $list_cat;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lấy dữ liệu listcheckbox</title>
</head>
<body>
    <form action="" method="POST">
        <label for="cat_1">thể thao</label>
        <input type="checkbox" name="cat[]" value="1" id="cat_1"> <br>
        <label for="cat_2">xã hội</label>
        <input type="checkbox" name="cat[]" value="2" id="cat_2"><br>
        <input type="submit" name="btn_add" value="thêm bài viết" id="">
    </form>
</body>
</html>