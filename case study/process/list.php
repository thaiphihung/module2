<?php
include_once 'db.php';
$sql = "SELECT * FROM `quanlysanpham`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$rows = $stmt->fetchAll();
// echo '<pre>';
// print_r($rows);
// die();
?>
<a class="btn btn-success" href="create.php"> Thêm Sản Phẩm </a>
<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Ảnh</th>
        <th>Tên Sản Phẩm</th>
        <th>Thương Hiệu</th>
        <th>Giá</th>
      </tr>
    </thead>
    <?php
        foreach($rows as $r) :
            // echo '<pre>';
            // print_r($r);
            // die();
        ?>   
         <tr>
        <td><?php echo $r['id'];?> </td>
        <td><img class="rounded float-start" style = 'width:120px;height:100px' src="..public/image"<?php echo $r['anh'];?>"></td>
        <td><?php echo $r['tensanpham'];?> </td>
        <td><?php echo $r['thuonghieu'];?> </td>
        <td><?php echo $r['gia'];?> </td>
        <td>
            <a class="btn btn-info" href="edit.php?id=<?php echo $r['id'];?>">Sửa</a> |  
            <a class="btn btn-warning" href="show.php?id=<?php echo $r['id'];?>">Chi Tiết</a> | 
            <a class="btn btn-danger" onclick=" return confirm('Are you sure ?'); " href="delete.php?id=<?php echo $r['id'];?>">Xóa</a> 
        </td>
    </tr>

    <!-- Kết thúc vòng lặp -->
    <?php endforeach; ?>
  </table>
  