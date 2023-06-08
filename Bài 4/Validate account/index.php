<?php
$pattern = '/^[_a-z0-9]{6,}$/';
$account = "123abc_";
$account1 = "12345";
if(preg_match($pattern,$account1)){
    echo "Account hợp lệ";
}
else{
    echo "Account không hợp lệ";
}
?>