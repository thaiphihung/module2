<table class='table'>
  <tr class='table-active'>
    <th>ID</th>
    <th>Ngày đặt hàng</th>
    <th>Số Lượng</th>
    <th>Khách Hàng</th>
    <th>Tổng Đơn</th>
    <th>Công Cụ</th>
  </tr>
  <?php foreach ($items as $row) : ?>
    <tr>
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['order_date'] ?></td>
      <td><?php echo $row['quantity'] ?></td>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['total'] ?></td>
      <td>
        <a class="btn btn-primary" href="index.php?controller=order&action=edit&id=<?php echo $row['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
          </svg></a>
        <a class="btn btn-danger" onclick="return confirm('Are you sure?')" ; href="index.php?controller=order&action=destroy&id=<?php echo $row['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
          </svg></a>
        <a class="btn btn-warning" href="index.php?controller=order&action=getView&id=<?php echo $row['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
          </svg></a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
<div class="pagination justify-content-center">
  <?php if ($current_page > 1) : ?>
    <a class="page-link" href="?controller=order&page=<?php echo $current_page - 1; ?>" aria-label="Trang trước">
      <span aria-hidden="true">&laquo;</span>
    </a>
  <?php endif; ?>

  <?php
  $start_page = max(1, $current_page - 1);
  $end_page = min($start_page + 2, $total_pages);

  for ($i = $start_page; $i <= $end_page; $i++) :
    if ($i == $current_page) : ?>
      <a class="page-link active" href="?controller=order&page=<?php echo $i; ?>"><?php echo $i; ?></a>
    <?php else : ?>
      <a class="page-link" href="?controller=order&page=<?php echo $i; ?>"><?php echo $i; ?></a>
  <?php endif;
  endfor; ?>

  <?php if ($current_page < $total_pages) : ?>
    <a class="page-link" href="?controller=order&page=<?php echo $current_page + 1; ?>" aria-label="Trang sau">
      <span aria-hidden="true">&raquo;</span>
    </a>
  <?php endif; ?>
</div>
<form class="row g-3" action="index.php?controller=order&action=create" method="POST">
  <div class="col-auto">
    <input type="submit" class="btn btn-primary mb-3" value="Thêm Mới">
  </div>
</form>
<?php // include_once 'View/Pagination/Pagination.php';
?>