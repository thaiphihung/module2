<table class='table'>
    <tr class='table-active'>
        <th>ID</th>
        <th>Ảnh</th>
        <th>Tên Sản Phẩm</th>
        <th>Thuộc Danh Mục Sản Phẩm</th>
        <th>Thương Hiệu</th>
        <th>Giá</th>
    </tr>
    <?php foreach ($result['rows'] as $row) : ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><img width="150" height="100" src="<?= $row['image']; ?>" alt=""></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['tendm'] ?></td>
            <td><?php echo $row['trademark'] ?></td>
            <td><?php echo $row['price'] ?></td>
    <?php endforeach; ?>
</table>
<?php
$total_pages = $result['total_pages'];
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$search = isset($_GET['search']) ? $_GET['search'] : '';
$controller = isset($_GET['controller']) ? $_GET['controller'] : '';
?>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php
        $visible_pages = min($total_pages, 3);
        $start_page = max(1, $current_page - 1);
        $end_page = min($start_page + $visible_pages - 1, $total_pages);
        ?>

        <?php if ($current_page > 1) : ?>
            <a class="page-link" href="?controller=staff&action=search&page=<?php echo $current_page - 1; ?><?php if (!empty($search)) echo '&search=' . urlencode($search); ?><?php if (!empty($result['search_s1'])) echo '&s1=' . urlencode($result['search_s1']); ?>" aria-label="Trang trước">
                <span aria-hidden="true">&laquo;</span>
            </a>
        <?php endif; ?>

        <?php for ($i = $start_page; $i <= $end_page; $i++) : ?>
            <?php if ($i == $current_page) : ?>
                <a class="page-link active" href="?controller=staff&action=search&page=<?php echo $i; ?><?php if (!empty($search)) echo '&search=' . urlencode($search); ?><?php if (!empty($result['search_s1'])) echo '&s1=' . urlencode($result['search_s1']); ?>"><?php echo $i; ?></a>
            <?php else : ?>
                <a class="page-link" href="?controller=staff&action=search&page=<?php echo $i; ?><?php if (!empty($search)) echo '&search=' . urlencode($search); ?><?php if (!empty($result['search_s1'])) echo '&s1=' . urlencode($result['search_s1']); ?>">
                    <?php echo $i; ?>
                </a>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if ($current_page < $total_pages) : ?>
            <a class="page-link" href="?controller=staff&action=search&page=<?php echo $current_page + 1; ?><?php if (!empty($search)) echo '&search=' . urlencode($search); ?><?php if (!empty($result['search_s1'])) echo '&s1=' . urlencode($result['search_s1']); ?>" aria-label="Trang sau">
                <span aria-hidden="true">&raquo;</span>
            </a>
        <?php endif; ?>
    </ul>
</nav>