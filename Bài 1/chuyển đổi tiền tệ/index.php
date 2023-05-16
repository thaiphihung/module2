<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $vnd = $_POST['num1'];
        $usd = $vnd / 23000;
        echo $vnd . "usd";
    }
    ?>
    <form action="" method="POST">
    <input type="text" value="vnd" name = "num1"></input>
    <input type="submit" value = "Chuyển đổi"></input>
    </form>
</body>
</html>