<?php
$pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
$email = "a@gmail.com";
$email1 = "@gmail.com";
if(preg_match($pattern,$email1)){
    echo "Email hợp lệ";
}
else {
    echo "Email không hợp lệ";
}
?>