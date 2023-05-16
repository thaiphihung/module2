<?php
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($username == 'denkk1996@gmail.com' && $password == '123123'){   
        echo ' Xin chào admin';
}
else {
        echo ' Sai thông tin đăng nhập';
}
?>



<form action="" method="POST">
    Username: <input type="text" name="username"> <br>
    Password: <input type="text" name="password"> <br>
    <input type="submit" value="Login">
</form>