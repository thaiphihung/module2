<?php
define('ROOT_DIR', dirname(__FILE__) );
define('ROOT_URL','localhost/case study/');
$username   = 'root';
$password   = '';
$database   = 'quanlybanhang';
global $conn;
try {
    $conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (Exception $e) {
    // echo $e->getMessage();
    echo '<h1>Khong the ket noi CSDL</h1>';
}