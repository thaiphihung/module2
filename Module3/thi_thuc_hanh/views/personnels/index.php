<?php include_once 'db.php'; ?>
<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Danh sách nhân sự
        </div>

        <div class="card-body">
            <div class="col-12">
                <a class="btn btn-success mb-2" href="index.php?action=create">Thêm mới</a>
                <form action="index.php" method="get">
                    <div class="row">
                        <div class="col">
                            <input type="text" placeholder="seach for ..." class="form-control" name="s" />
                        </div>

                        <div class="col">
                            <button type="submit" class="btn btn-secondary "> Tìm </button>
                        </div>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Nhân Sự</th>
                            <th>Vị Trí</th>
                            <th>Chi Nhánh</th>
                            <th>Tuổi</th>
                            <th>Ngày Làm Việc</th>
                            <th>Lương</th>
                            <th>HÀNH DỘNG</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($items as $r) : ?>
                            <tr>
                                <td><?php echo $r['id'] ?></td>
                                <td><?php echo $r['name'] ?></td>
                                <td><?php echo $r['location'] ?></td>
                                <td><?php echo $r['branch'] ?></td>
                                <td><?php echo $r['age'] ?></td>
                                <td><?php echo $r['working_date'] ?></td>
                                <td><?php echo $r['wage'] ?></td>
                                <td><a href="index.php?action=destroy&id=<?php echo $r['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chắn muốn xoá?')">Xóa</a>
                                    <a href="index.php?action=show&id=<?php echo $r['id']; ?>" class="btn btn-info btn-sm">Xem</a>
                                    <a href="index.php?action=edit&id=<?php echo $r['id']; ?>" class="btn btn-primary btn-sm">Sửa</a>
                                </td>
                            <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="pagination justify-content-center">
                    <?php if ($current_page > 1) : ?>
                        <a class="page-link" href="?page=<?php echo $current_page - 1; ?>" aria-label="Trang trước">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    <?php endif; ?>

                    <?php
                    $start_page = max(1, $current_page - 1);
                    $end_page = min($start_page + 2, $total_pages);

                    for ($i = $start_page; $i <= $end_page; $i++) :
                        if ($i == $current_page) : ?>
                            <a class="page-link active" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        <?php else : ?>
                            <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    <?php endif;
                    endfor; ?>

                    <?php if ($current_page < $total_pages) : ?>
                        <a class="page-link" href="?page=<?php echo $current_page + 1; ?>" aria-label="Trang sau">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>