<?php
$pattern = '/\([0-9]{2,2}\)\-\([0-9]{10,10}\)/';
$number = "(84)-(0978489648)";
$number1 = "(a8)-(22222222)";
if(preg_match($pattern,$number1)){
    echo "Hợp lệ";
}
else {
    echo "Không hợp lệ";
}
?>