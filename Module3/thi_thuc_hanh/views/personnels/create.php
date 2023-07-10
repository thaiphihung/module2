<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Thêm mới nhân sự
        </div>
        <div class="card-body">
            <div class="col-12">
                <form action="index.php?action=store" method="post">
                    <div class="mb-3">
                        <label class="form-label">Tên Nhân Sự</label>
                        <input type="text" name="name" class="form-control">
                        <?php if (isset($errors['name'])) : ?>
                            <p class="text-danger"><?php echo $errors['name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Vị Trí</label>
                        <input type="text" class="form-control" name="location">
                        <?php if (isset($errors['location'])) : ?>
                            <p class="text-danger"><?php echo $errors['location'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Chi Nhánh</label>
                        <input type="text" class="form-control" name="branch">
                        <?php if (isset($errors['branch'])) : ?>
                            <p class="text-danger"><?php echo $errors['branch'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tuổi</label>
                        <input type="text" class="form-control" name="age">
                        <?php if (isset($errors['age'])) : ?>
                            <p class="text-danger"><?php echo $errors['age'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ngày Làm Việc</label>
                        <input type="date" class="form-control" name="working_date">
                        <?php if (isset($errors['working_date'])) : ?>
                            <p class="text-danger"><?php echo $errors['working_date'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lương</label>
                        <input type="text" class="form-control" name="wage">
                        <?php if (isset($errors['wage'])) : ?>
                            <p class="text-danger"><?php echo $errors['wage'] ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary" href="index.php">Thêm mới</button>
                    <a type="button" href="index.php" class="btn btn-secondary">Hủy</a>
                </form>
            </div>
        </div>
    </div>
</div>