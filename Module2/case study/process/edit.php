<?php 
include_once '../db.php';
// echo '<pre>';
// print_r($_GET);
// die();
//1. Lay gia tri tren URL
$id = $_GET['id'];
//2. Viet cau SQL
$sql = "SELECT * FROM `quanlysanpham` WHERE id = $id";
//3. Debug SQL
// echo $sql;die();
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array
$row = $stmt->fetch();
// echo '<pre>';
// print_r($row);
// die();
if( $_SERVER['REQUEST_METHOD'] == "POST" ){
    // in du lieu nguoi dung gui len
    // echo '<pre>';
    // print_r( $_REQUEST );
    // die();
    // 
    $ANH = '';
    $tensanpham = $_REQUEST['tensanpham'];
    $thuonghieu = $_REQUEST['thuonghieu'];
    $gia = $_REQUEST['gia'];
    if (isset($_FILES['anh']) && $_FILES['anh']['error'] == UPLOAD_ERR_OK) {
      $tmp_name = $_FILES['anh']['tmp_name'];
      $name = uniqid() . '_' . $_FILES['anh']['name']; // unique name to prevent overwriting files with same name
      $path = ROOT_DIR . '/public/uploads/';
  
      // Check if uploads directory exists, create one if not
      if (!is_dir($path)) {
        mkdir($path);
      }
  
      // Move uploaded file to uploads directory
      if (move_uploaded_file($tmp_name, $path . $name)) {
        $ANH = 'public/uploads/' . $name;
      } else {
        echo 'Lỗi khi tải ảnh lên';
      }
    }
  

    $sql = "UPDATE `quanlysanpham` SET `anh` = '$ANH', `tensanpham` = '$tensanpham', `thuonghieu` = '$thuonghieu',`gia` = '$gia' WHERE `id` = $id";
    echo $sql;
    //Thuc hien truy van
     $conn->query($sql);

     // chuyen huong ve trang danh sach
     header("Location: ../index.php");
}
?>
<?php include_once '../include/nav.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
<form action="" method="post" enctype="multipart/form-data" >
<div class="mb-3">
  <label for="formFileSm" class="form-label">Ảnh</label>
  <input class="form-control form-control-sm" id="anh" type="file" name = 'anh' >
</div>
  <div class="form-group">
    <label for="exampleInpu tEmail1">Tên Sản Phẩm</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tensanpham" value="<?php echo $row['tensanpham']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Thương Hiệu</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="thuonghieu" value="<?php echo $row['thuonghieu']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Giá</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="gia" value="<?php echo $row['gia']; ?>">
  </div><br>
  <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
</body>
</html>
<?php include_once '../include/footer.php'?>