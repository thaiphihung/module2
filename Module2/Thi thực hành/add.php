<?php
   include_once 'db.php';//$conn
   // echo '<pre>';
   // print_r($_GET);
   // die();
   $sql = "SELECT * FROM `danhsachbenhnhan`";
   $stmt = $conn->query($sql);
   $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
   $a = $stmt->fetchAll();
   $error = [];
  //  Lay gia tri ID tren URL
  //  $id = $_GET['id'];
  //  //lay du lieu theo ID
  //  $sql = "SELECT * FROM `danhsachbenhnhan` WHERE mabenhnhan = $id";
  //  //Debug sql
  //  // var_dump($sql);
  //  $stmt = $conn->query($sql);
  //  $stmt->setFetchMode(PDO::FETCH_ASSOC);//array

  //  //Lấy về dữ liệu duy nhat
  //  $row = $stmt->fetch();
 
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

        if($tenbenhnhan == ""){
            $error['tenbenhnhan'] = 'Bạn chưa nhập tên bệnh nhân';
            }
          if($phong == ""){
            $error['phong'] = 'Bạn chưa nhập phòng';
            }
          if($gioitinh == ""){
            $error['gioitinh'] = 'Bạn chưa nhập giới tính';
            }
            if($ngaynhapvien == ""){
                $error['ngaynhapvien'] = 'Bạn chưa nhập ngày nhập viện';
                }
                if($tinhtrang == ""){
                  true;
                  }
                  if($thongtinbenhnhan == ""){
                   true;
                    }      
                if (count($error) == 0){
                    $sql = "INSERT INTO danhsachbenhnhan(tenbenhnhan,phong,gioitinh,ngaynhapvien,tinhtrang,thongtinbenhnhan) VALUES('$tenbenhnhan','$phong','$gioitinh','$ngaynhapvien','$tinhtrang','$thongtinbenhnhan')";
        //Debug sql
        // var_dump($sql);
        // die();

        //Thuc hien truy van
        $conn->exec($sql);

        //Chuyen huong
        header("Location: list.php");
                }
        //Viet cau truy van
        
    }
    ?>
<div class="container-fluid px-4">
  <h1>Thêm Bệnh Nhân</h1>
  <form action="" method="post">
  <div class="form-group">
            <label for="tenbenhnhan">Tên Bệnh Nhân:</label>
            <input type="text" class="form-control" id="tenbenhnhan" name="tenbenhnhan">
            <div class="text-danger"><?php echo isset($error['tenbenhnhan']) ? $error['tenbenhnhan'] : ''; ?></div>
        </div>
        <div class="form-group">
            <label for="phong">Phòng:</label>
            <input type="text" class="form-control" id="phong" name="phong" ?>
            <div class="text-danger"><?php echo isset($error['phong']) ? $error['phong'] : ''; ?></div>
        </div>
        <div class="form-group">
        <label for="gioitinh">Giới Tính:</label>
        <select name="gioitinh">
          <option value="Nam">Nam</option>
          <option value="Nu">Nu</option>
        </select>
        </div>
        <div class="form-group">
            <label for="ngaynhapvien">Ngày Nhập Viện:</label>
            <input type="date" class="form-control" id="ngaynhapvien" name="ngaynhapvien" >
            <div class="text-danger"><?php echo isset($error['ngaynhapvien']) ? $error['ngaynhapvien'] : ''; ?></div>
        </div>
        <div class="form-group">
            <label for="tinhtrang">Tình Trạng:</label>
            <input type="text" class="form-control" id="tinhtrang" name="tinhtrang">
        </div>
        <div class="form-group">
            <label for="thongtinbenhnhan">Thông Tin Bệnh Nhân:</label>
            <input type="text" class="form-control" id="thongtinbenhnhan" name="thongtinbenhnhan">
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