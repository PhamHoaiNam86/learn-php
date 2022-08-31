<?php
if(isset($_POST['btn_reg'])){
    if(isset($_POST['rules'])){
        $rules = $_POST['rules'];
        echo $rules;
     
    }else{
        echo "bạn cần đồng ý điều khoản";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lấy dữ liệu từ checkbox</title>
</head>
<body>
    <style>
        p{
            width: 400px;
            height: 100px;
            overflow-y: scroll;
        }
    </style>
    <form action="" method="POST">
        <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam unde eos ut voluptatem ad atque repellendus repellat, debitis ullam minima ipsam explicabo mollitia magnam aliquid, sint maxime eius nostrum necessitatibus rem facere non beatae ex temporibus consequatur! Consectetur quisquam rerum voluptates aliquid ex iure obcaecati. Libero, inventore id? Repudiandae quod vero in nobis iure illo, eius facere, aperiam harum quis dolorum eos quia necessitatibus maiores voluptates. Assumenda, aliquam. Quibusdam quos delectus laudantium fugit in nesciunt illum hic dolores repellat nulla est quod aliquam, officiis, deleniti veritatis magnam sed harum non corrupti! Labore, accusantium. Ratione tempore molestias consectetur distinctio quidem minus.</p>
        <label for="rules">ĐỒNG Ý</label>
        <input type="checkbox" name="rules" id="rules" value="yes"><br>
        <input type="submit" name="btn_reg" value="register">
    </form>
</body>
</html>