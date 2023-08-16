<?php
include_once 'db.php';
$sql = "SELECT * FROM `danhsachbenhnhan`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$a = $stmt->fetchAll();
// echo '<pre>';
// print_r($rows);
// die();
?>
<div class="container-fluid px-4">
    <a class="btn btn-success" href="add.php"> Thêm mới </a>
    <!-- <p class="mt-3"><?= $msg ?></p> -->
<!-- form tìm kiếm -->
<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" action="list.php" method="get">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." name="s" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <table class="table table-bordered table-hover mt-3">
    <thead>
        <tr>
            <th>Mã Bệnh Nhân</th>
            <th>Tên Bênh Nhân</th>
            <th>Phòng</th>
            <th>Ngày Nhập Viện</th>
            <th>Giới Tính</th>
            <th>Tình Trạng</th>
            <th>Thông Tin Bệnh Nhân</th>
            <th>Thao Tác</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $a as $key => $row ):
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td><?php echo $row['mabenhnhan'];?></td>
                <td><?php echo $row['tenbenhnhan'];?></td>
                <td><?php echo $row['phong'];?></td>
                <td><?php echo $row['ngaynhapvien'];?></td>
                <td><?php echo $row['gioitinh'];?></td>
                <td><?php echo $row['tinhtrang'];?></td>
                <td><?php echo $row['thongtinbenhnhan'];?></td>
                <td style="display: flex;">
                    <a class="btn btn-primary" href="edit.php?id=<?= $row['mabenhnhan'] ;?>">Sửa</a> <br>
                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa bệnh nhân này không ?');" href="delete.php?id=<?= $row['mabenhnhan'] ;?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>