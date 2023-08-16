<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["number"];
    // echo $num;
}

// $num = intval(readline("Vui lòng nhập số cần đọc (tối đa 3 chữ số): "));
if ($num >= 0 && $num < 10) {
    switch ($num) {
        case 1:
            echo  "một";
            break;
        case 2:
            echo  "hai";
            break;
        case 3:
            echo  "ba";
            break;
        case 4:
            echo "bốn";
            break;
        case 5:
            echo  "năm";
            break;
        case 6:
            echo  "sáu";
            break;
        case 7:
            echo  "bảy";
            break;
        case 8:
            echo "tám";
            break;
        case 9:
            echo "chín";
            break;
    }
}
if ($num < 20) {
    switch ($num) {
        case 10:
            echo "mười";
            break;
        case 11:
            echo "mười một";
            break;
        case 12:
            echo "mười hai";
            break;
        case 13:
            echo "mười ba";
            break;
        case 14:
            echo "mười bốn";
            break;
        case 15:
            echo "mười lăm";
            break;
        case 16:
            echo "mười sáu";
            break;
        case 17:
            echo "mười bảy";
            break;
        case 18:
            echo "mười tám";
            break;
        case 19:
            echo "mười chín";
    }
}
if ($num >= 20 && $num < 100) {
    // echo 1;
    $tens = floor($num / 10);
    $ones = $num % 10;
    switch ($tens) {
        case 2:
            echo "hai mươi";
            break;
        case 3:
            echo "ba mươi";
            break;
        case 4:
            echo "bốn mươi";
            break;
        case 5:
            echo "năm mươi";
            break;
        case 6:
            echo "sáu mươi";
            break;
        case 7:
            echo "bảy mươi";
            break;
        case 8:
            echo "tám mươi";
            break;
        case 9:
            echo "chín mươi";
            break;
            // default: 
            // echo 1;

    }
    if ($ones > 0) {
        switch ($ones) {
            case 1:
                echo " một";
                break;
            case 2:
                echo " hai";
                break;
            case 3:
                echo " ba";
                break;
            case 4:
                echo " bốn";
                break;
            case 5:
                echo " năm";
                break;
            case 6:
                echo " sáu";
                break;
            case 7:
                echo " bảy";
                break;
            case 8:
                echo " tám";
                break;
            case 9:
                echo " chín";
                break;
        }
    }
}
if ($num >= 100 && $num < 1000) {
    $hundred = floor($num / 100);
    $num = floor($num % 100);
    $tens =floor( $num / 10);
    $ones = floor($num % 10);
}
    switch ($hundred) {
        case 1:
            echo "một trăm";
            break;
        case 2:
            echo "hai trăm";
            break;
        case 3:
            echo "ba trăm";
            break;
        case 4:
            echo "bốn trăm";
            break;
        case 5:
            echo "năm trăm";
            break;
        case 6:
            echo "sáu trăm";
            break;
        case 7:
            echo "bảy trăm";
            break;
        case 8:
            echo "tám trăm";
            break;
        case 9:
            echo "chín trăm";
            break;
    }
    if ($tens> 0 && $tens<10) {
        switch ($tens) {
            case 1:
                echo " mười";
                break;
            case 2:
                echo " hai mươi";
                break;
            case 3:
                echo " ba mươi";
                break;
            case 4:
                echo " bốn mươi";
                break;
            case 5:
                echo " năm mươi";
                break;
            case 6:
                echo " sáu mươi";
                break;
            case 7:
                echo " bảy mươi";
                break;
            case 8:
                echo " tám mươi";
                break;
            case 9:
                echo " chín mươi";
                break;
        }
    }
    if($ones > 0){
        switch($ones){
            case 1:echo " một";
            break;
            case 2:echo " hai";
            break;
            case 3:echo " ba";
            break;
            case 4:echo " bốn";
            break;
            case 5:echo " năm";
            break;
            case 6:echo " sáu";
            break;
            case 7:echo " bảy";
            break;
            case 8:echo " tám";
            break;
            case 9:echo " chín";
            break;
        }
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
    <form action="" method="POST">
        <input type="text" name="number">
        <input type="submit" value="submit">
    </form>
</body>

</html>