<?php
$username   = 'root';
$password   = '';
$database   = 'thithuchanh';
try {
    /*
    PDO     : pho bien hien nay
    mysqli  : 
    mysql   :
    */ 
    $conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (Exception $e) {
    // echo $e->getMessage();
    echo '<h1>Khong the ket noi CSDL</h1>';
}
