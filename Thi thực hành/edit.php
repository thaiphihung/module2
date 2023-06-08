<?php
    include_once 'db.php';//$conn
    // echo '<pre>';
    // print_r($_GET);
    // die();
    $sql = "SELECT * FROM `danhsachbenhnhan`";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
    $a = $stmt->fetchAll();
     
    //Lay gia tri ID tren URL
    $id = $_GET['id'];
    //lay du lieu theo ID
    $sql = "SELECT * FROM `danhsachbenhnhan` WHERE mabenhnhan = $id";
    //Debug sql
    // var_dump($sql);
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array

    //Lấy về dữ liệu duy nhat
    $row = $stmt->fetch();

    //  echo '<pre>';
    // print_r($row);
    // die();
    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        $tenbenhnhan = $_REQUEST['tenbenhnhan'];
        $phong = $_REQUEST['phong'];
        $gioitinh = $_REQUEST['gioitinh'];
        $ngaynhapvien = $_REQUEST['ngaynhapvien'];
        $tinhtrang = $_REQUEST['tinhtrang'];
        $thongtinbenhnhan = $_REQUEST['thongtinbenhnhan'];

        //Viet cau truy van
        $sql = "UPDATE danhsachbenhnhan SET 
                tenbenhnhan = '$tenbenhnhan',
                phong = '$phong',
                gioitinh = '$gioitinh',
                ngaynhapvien = '$ngaynhapvien',
                tinhtrang = '$tinhtrang',
                thongtinbenhnhan = '$thongtinbenhnhan'
                WHERE mabenhnhan = $id
        ";
       
        //Debug sql
        // var_dump($sql);
        // die();

        //Thuc hien truy van
        $conn->exec($sql);

        //Chuyen huong
        header("Location: list.php");
    }

?>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for="tenbenhnhan">Tên Bệnh Nhân:</label>
            <input type="text" class="form-control" id="tenbenhnhan" name="tenbenhnhan" value="<?= $row['tenbenhnhan']; ?>">
        </div>
        <div class="form-group">
            <label for="phong">Phòng:</label>
            <input type="text" class="form-control" id="phong" name="phong" value="<?= $row['phong']; ?>">
        </div>
        <div class="form-group">
        <label for="gioitinh">Giới Tính:</label>
        <select name="gioitinh">
          <option value="Nam">Nam</option>
          <option value="Nữ">Nu</option>
        </select>
        </div>
        <div class="form-group">
            <label for="ngaynhapvien">Ngày Nhập Viện:</label>
            <input type="date" class="form-control" id="ngaynhapvien" name="ngaynhapvien" value="<?= $row['ngaynhapvien']; ?>">
        </div>
        <div class="form-group">
            <label for="tinhtrang">Tình Trạng:</label>
            <input type="text" class="form-control" id="tinhtrang" name="tinhtrang" value="<?= $row['tinhtrang']; ?>">
        </div>
        <div class="form-group">
            <label for="thongtinbenhnhan">Thông Tin Bệnh Nhân:</label>
            <input type="text" class="form-control" id="thongtinbenhnhan" name="thongtinbenhnhan" value="<?= $row['thongtinbenhnhan']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
        <a href="list.php" class="btn btn-secondary">Thoát</a>
    </form>
</div>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>