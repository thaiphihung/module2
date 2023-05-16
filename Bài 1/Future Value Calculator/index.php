<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['year'];
    $giatrihientai = $a * $b;
    $giatrituonglai = $giatrihientai + ($giatrihientai * $b);
    echo $giatrituonglai * $c;
}
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
    <form action="" method = "POST">
        <h1>Bảng tính giá trị tương lai đối với tiền đầu tư</h1>
        <input type="text" value="Lượng tiền đầu tư ban đầu" name = "a">
        <input type="text" value="Lãi suất năm" name = "b">
        <input type="text" value="Số năm đầu tư" name = "year">
        <input type="submit" value="submit">
    </form>
</body>
</html>