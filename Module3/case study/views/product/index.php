<table class='table'>
  <tr class='table-active'>
    <th>ID</th>
    <th>Ảnh</th>
    <th>Tên Sản Phẩm</th>
    <th>Thuộc Danh Mục Sản Phẩm</th>
    <th>Thương Hiệu</th>
    <th>Giá</th>
    <th>Quản lý</th>

  </tr>
  <?php foreach ($items as $row) : ?>
    <tr>
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['image'] ?></td>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['category_id'] ?></td>
      <td><?php echo $row['trademark'] ?></td>
      <td><?php echo $row['price'] ?></td>
      <td>
        <a href="index.php?controller=product&action=edit&id=<?php echo $row['id'] ?>">Edit</a>
        <a style='color:red;' onclick="return confirm('Are you sure?')" ; href="index.php?controller=product&action=delete&id=<?php echo $row['id'] ?>">Delete</a>
        <a href="index.php?controller=product&action=getView&id=<?php echo $row['id'] ?>">View</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
<div class="pagination justify-content-center">
  <?php if ($current_page > 1) : ?>
    <a class="page-link" href="?controller=product&page=<?php echo $current_page - 1; ?>" aria-label="Trang trước">
      <span aria-hidden="true">&laquo;</span>
    </a>
  <?php endif; ?>

  <?php
  $start_page = max(1, $current_page - 1);
  $end_page = min($start_page + 2, $total_pages);

  for ($i = $start_page; $i <= $end_page; $i++) :
    if ($i == $current_page) : ?>
      <a class="page-link active" href="?controller=product&page=<?php echo $i; ?>"><?php echo $i; ?></a>
    <?php else : ?>
      <a class="page-link" href="?controller=product&page=<?php echo $i; ?>"><?php echo $i; ?></a>
  <?php endif;
  endfor; ?>

  <?php if ($current_page < $total_pages) : ?>
    <a class="page-link" href="?controller=product&page=<?php echo $current_page + 1; ?>" aria-label="Trang sau">
      <span aria-hidden="true">&raquo;</span>
    </a>
  <?php endif; ?>
</div>
</div>
<form class="row g-3" action="index.php?controller=product&action=create" method="POST">
  <div class="col-auto">
    <input type="submit" class="btn btn-primary mb-3" value="Create">
  </div>
</form>
<?php // include_once 'View/Pagination/Pagination.php';
?>